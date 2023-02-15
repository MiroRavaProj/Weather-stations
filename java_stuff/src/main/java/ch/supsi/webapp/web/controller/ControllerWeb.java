package ch.supsi.webapp.web.controller;


import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;


@Controller
public class ControllerWeb {


    @GetMapping(value = "/weather")
    public String weatherPage() {

        return "weatherPage";
    }

    @GetMapping(value = "/weatherGlobalMap")
    public String globalMap() {

        return "globalMap";
    }

    @GetMapping(value = "/weatherTrendLine")
    public String trendLine() {

        return "trendLine";
    }

    @GetMapping(value = "/weatherLocationMap")
    public String locationMapGet() {

        return "locationMap";
    }

    @PostMapping(value = "/weatherLocationMap")
    public String locationMapPost(String location) throws IOException, InterruptedException {

        ProcessBuilder pb = new ProcessBuilder("py", "\"C:\\Users\\dani9\\Desktop\\Hackaton2\\ibrahim\\src\\main\\resources\\static\\plotter.py\"", location);
        Process p = pb.start();


        int exitCode = p.waitFor();
        if (exitCode != 0) {
            System.out.println("Il processo ha restituito un errore: " + exitCode);
        }

        System.out.println("Error: ");
        // Stampa eventuali messaggi di errore del processo
        BufferedReader error = new BufferedReader(new InputStreamReader(p.getErrorStream()));
        String line;
        while ((line = error.readLine()) != null) {
            System.out.println(line);
        }

        System.out.println("Output: ");
        // Stampa eventuali messaggi di output del processo
        BufferedReader output = new BufferedReader(new InputStreamReader(p.getInputStream()));
        line = "";
        while ((line = output.readLine()) != null) {
            System.out.println(line);
        }


        return "locationMap";
    }
}
