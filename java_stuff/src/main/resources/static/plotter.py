import pandas as pd
from meteostat import *
from datetime import datetime
import plotly.express as px
import geopy
import sys


def plot_maker(city_name: str = None):
    if city_name is None:
        fig = px.scatter_mapbox(test, lat="latitude", lon="longitude", hover_name="name",
                                hover_data=["tavg", "tmin", "tmax", "prcp"],
                                color="tavg", zoom=1, height=800, color_continuous_scale="bluered",
                                animation_frame="time")
        fig.update_layout(mapbox_style="open-street-map")
        fig.update_layout(margin={"r": 0, "t": 0, "l": 0, "b": 0})
        fig.write_html("out.html")

        return
    else:
        locator = geopy.Nominatim(user_agent="myGeocoder")
        location = locator.geocode(city_name)
        if location is None:
            return plot_maker()
        longitude = location.longitude
        latitude = location.latitude

        city = Point(latitude, longitude)
        city.max_count = 50
        city.radius = 1000000
        start = datetime(2022, 12, 1)
        end = datetime(2022, 12, 31)

        new_data = Monthly(city, start, end).fetch()

        new_data["longitude"] = longitude
        new_data["latitude"] = latitude
        new_data["name"] = city_name
        new_data["size"] = 20

        df = pd.concat([test, new_data])

        fig = px.scatter_mapbox(df, lat="latitude", lon="longitude", hover_name="name",
                                hover_data=["tavg", "tmin", "tmax", "prcp"],
                                color="tavg", zoom=12, height=800, color_continuous_scale="bluered",
                                center=dict(lat=latitude, lon=longitude), size="size")
        fig.update_layout(mapbox_style="open-street-map")
        fig.update_layout(margin={"r": 0, "t": 0, "l": 0, "b": 0})
        fig.write_html(f"C:\\opt\\files\\out.html")

        return


if __name__ == '__main__':
    file_path = f"C:\\Users\\dani9\\Desktop\\Hackaton2\\ibrahim\\src\\main\\resources\\static\\out_df"
    test = pd.read_feather(file_path)
    plot_maker(sys.argv[1])

