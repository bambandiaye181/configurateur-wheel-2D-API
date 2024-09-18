<?php
/**
 * Child-Theme functions and definitions
 */

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_shortcode('api-data','api_calling');

function api_calling()
{
    $html = '
    <script>
    var year_selected;
    var model_selected;
    var vehicule_selected;
    var template_selected;
    var counter = 0;

    function clearSelect(sel,text) {
        var select = document.getElementById(sel);

        select.innerHTML = "";
        var option = document.createElement("option");
        option.textContent = text; 
        option.value = "";
        select.appendChild(option);
        
    }
    function fetchYear() {
        counter++;
        //console.log(counter);
        var apiUrl = "https://api.wheel-size.com/v2/configurator/years/?user_key=a77861354fca6475fa1ec64b00bed407";
        //var apiUrl = "";

        console.log(apiUrl);
        if (counter <= 1){
            fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                var selectFields = document.getElementsByClassName("dynamic-select1");

                for (var i = 0; i < selectFields.length; i++) {
                    var select = selectFields[i];
                    select.innerHTML = ""; // Clear previous options
                    var option = document.createElement("option");
                        option.textContent = "Année"; 
                        option.value = "";
                    select.appendChild(option);
                    data.data.forEach(function(item) {
                        var option = document.createElement("option");
                        option.value = item.slug; 
                        option.textContent = item.name; 
                        select.appendChild(option);
                    });
                    
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
        }else{

        }

    }
        
    function fetchMakes(selectedValue) {
        // Replace NEW_API_URL with your actual API endpoint
        year_selected = selectedValue;
        //var apiUrl = "https://api.wheel-size.com/v2/configurator/makes/?year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        var apiUrl = "";
        console.log(selectedValue);
        console.log(year_selected);
        console.log(apiUrl);
        var yearSelect = document.getElementById("yearSelect");
        if (yearSelect.value !== "") {
            fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                var selectFields = document.getElementsByClassName("dynamic-select2");

                for (var i = 0; i < selectFields.length; i++) {
                    var select = selectFields[i];
                    select.innerHTML = ""; // Clear previous options
                    var option = document.createElement("option");
                        option.textContent = "Marque"; 
                        option.value = "";
                    select.appendChild(option);
                    data.data.forEach(function(item) {
                        var option = document.createElement("option");
                        option.value = item.slug; 
                        var image = document.createElement("img");
                        image.src = item.logo; 
                        image.alt = item.name; 
                        image.style.width = "50px"; 
                    
                        option.appendChild(image);
                    
                        option.appendChild(document.createTextNode(item.name));
                    
                        select.appendChild(option);
                    });
                    
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
        }else{
            console.log("year null");
            clearSelect("makeSelect","Marque");
            clearSelect("modelSelect","Modèle");
            clearSelect("vehiculeSelect","Vehicule template");
            clearSelect("colorSelect","Couleur");
        }

    }
    function fetchModels(selectedValue) {
        // Replace NEW_API_URL with your actual API endpoint
        model_selected = selectedValue;
        //var apiUrl = "https://api.wheel-size.com/v2/configurator/models/?make="+model_selected+"&year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        var apiUrl = "";
        console.log(apiUrl);
        console.log(model_selected);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                var selectFields = document.getElementsByClassName("dynamic-select3");

                for (var i = 0; i < selectFields.length; i++) {
                    var select = selectFields[i];
                    select.innerHTML = ""; // Clear previous options
                    var option = document.createElement("option");
                        option.textContent = "Modèle"; 
                        option.value = "";
                    select.appendChild(option);
                    data.data.forEach(function(item) {
                        var option = document.createElement("option");
                        option.value = item.slug; // Use the slug as the value
                        option.textContent = item.name; // Use the name as the display text
                        select.appendChild(option);
                    });
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
    }

    function fetchTemplatesVehicule(selectedValue) {
        // Replace NEW_API_URL with your actual API endpoint
        vehicule_selected = selectedValue;
        //var apiUrl = "https://api.wheel-size.com/v2/configurator/templates/?make="+model_selected+"&model="+vehicule_selected+"&year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        var apiUrl = "";
        console.log(apiUrl);
        console.log(vehicule_selected);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                var selectFields = document.getElementsByClassName("dynamic-select4");

                for (var i = 0; i < selectFields.length; i++) {
                    var select = selectFields[i];
                    select.innerHTML = ""; // Clear previous options
                    var option = document.createElement("option");
                        option.textContent = "Template vehicule"; 
                        option.value = "";
                    select.appendChild(option);
                    data.data.forEach(function(item) {
                        var option = document.createElement("option");
                        option.value = item.id; // Use the slug as the value
                        option.textContent = item.vehicle_data.trim +" "+item.vehicle_data.year+" "+item.vehicle_data.body+" "+item.vehicle_data.wheels; // Use the name as the display text
                        select.appendChild(option);
                    });
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
    }
    function fetchVehiculeColor(selectedValue) {
        var wheelSelect = document.getElementById("wheelSelect");
        var wheelValue = wheelSelect.value;
        console.log(wheelValue);
        var imgUrl = "";
        if(wheelValue == "pp-01") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }else if(wheelValue == "pp-02") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/vlcsnap-2023-11-27-22h54m31s309-removebg-preview.png";
        }else if(wheelValue == "pp-03") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i7-removebg-preview.png";
        }else if(wheelValue == "pp-04") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }

        // Replace NEW_API_URL with your actual API endpoint
        template_selected = selectedValue;
        //var apiUrl = "https://api.wheel-size.com/v2/configurator/templates/"+template_selected+"/fit/?url="+imgUrl+"&user_key=a77861354fca6475fa1ec64b00bed407";
        var apiUrl = "";
        console.log(selectedValue);
        console.log(template_selected);
        console.log(apiUrl);

        var requestOptions = {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            }
        };
        
        var responseData = fetch(apiUrl, requestOptions).then(response => response.json());
        fetch(apiUrl, requestOptions)
        .then(response => response.json())
        .then(data => {
            // Process the retrieved data and populate select fields
            var selectFields = document.getElementsByClassName("dynamic-select5");

            for (var i = 0; i < selectFields.length; i++) {
                var select = selectFields[i];
                select.innerHTML = ""; // Clear previous options
                    var option = document.createElement("option");
                        option.textContent = "Couleur"; 
                        option.value = "";
                    select.appendChild(option);

                    var option = document.createElement("option");
                    option.value = data.color.slug; // Use the slug as the value
                    option.textContent = data.color.name +" "+data.color.slug;
                    select.appendChild(option);

                    var vehicleImage = document.getElementById("vehicleImage");
                    vehicleImage.src = data.image;
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });


    }
    function changeVehiculeColor(selectedValue) {
        var wheelSelect = document.getElementById("wheelSelect");
        var wheelValue = wheelSelect.value;
        var imgUrl = "";
        if(wheelValue == "pp-01") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }else if(wheelValue == "pp-02") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/vlcsnap-2023-11-27-22h54m31s309-removebg-preview.png";
        }else if(wheelValue == "pp-03") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i7-removebg-preview.png";
        }else if(wheelValue == "pp-04") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }

        // Replace NEW_API_URL with your actual API endpoint
        //var apiUrl = "https://api.wheel-size.com/v2/configurator/templates/"+template_selected+"/fit/?color="+selectedValue+"&url="+imgUrl+"&user_key=a77861354fca6475fa1ec64b00bed407";
        var apiUrl = "";
        console.log(selectedValue);
        console.log(apiUrl);

        var requestOptions = {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            }
        };
        
        var responseData = fetch(apiUrl, requestOptions).then(response => response.json());
        fetch(apiUrl, requestOptions)
        .then(response => response.json())
        .then(data => {
            // Process the retrieved data and populate select fields
            var selectFields = document.getElementsByClassName("dynamic-select5");
            var vehicleImage = document.getElementById("vehicleImage");
            vehicleImage.src = data.image;

        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });


    }
    </script>';

        include 'slider.php';

    }

?>