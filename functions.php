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

        //include 'slider.php';
        include 'conf2D.php';

    }
    
    //custom field
    add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'handle_custom_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'handle_custom_add_to_cart');

function handle_custom_add_to_cart() {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    
    // Récupération des custom fields
    $wheel_data = array(
        'marque' => isset($_POST['selectedBrand']) ? sanitize_text_field($_POST['selectedBrand']) : '',
        'annee' => isset($_POST['selectedYear']) ? sanitize_text_field($_POST['selectedYear']) : '',
        'modele' => isset($_POST['selectedModel']) ? sanitize_text_field($_POST['selectedModel']) : '',
        'motorisation' => isset($_POST['selectedModification']) ? sanitize_text_field($_POST['selectedModification']) : '',
        'param_jantes' => isset($_POST['param_selected']) ? ($_POST['param_selected'] === 'free' ? 'Libre' : 'Recommandé') : '',
        'taille' => isset($_POST['taille']) ? sanitize_text_field($_POST['taille']) : '',
        'alesage_central' => isset($_POST['alesageCentral']) ? sanitize_text_field($_POST['alesageCentral']) : '',
        'entraxe' => isset($_POST['entraxe']) ? sanitize_text_field($_POST['entraxe']) : '',
        'deport' => isset($_POST['deport']) ? sanitize_text_field($_POST['deport']) : '',
        'filletage' => isset($_POST['filletage']) ? sanitize_text_field($_POST['filletage']) : '',
        'params_identiques' => isset($_POST['keepParamFrontBack']) ? ($_POST['keepParamFrontBack'] ? 'Oui' : 'Non') : '',
        'modele_roue' => isset($_POST['wheelName_selected']) ? sanitize_text_field($_POST['wheelName_selected']) : '',
        'couleur' => isset($_POST['CM_ColorName_selected']) ? sanitize_text_field($_POST['CM_ColorName_selected']) : '',
        'cache_moyeux' => isset($_POST['CM_ColorName_selected']) ? sanitize_text_field($_POST['CM_ColorName_selected']) : '',
        'boulons' => isset($_POST['Boulons_ColorName_selected']) ? sanitize_text_field($_POST['Boulons_ColorName_selected']) : ''
    );

    // Vérifier si le produit existe
    $product = wc_get_product($product_id);
    if (!$product) {
        wp_send_json_error('Produit non trouvé');
        return;
    }

    // Ajouter au panier avec les données personnalisées
    $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity, 0, array(), $wheel_data);

    if ($cart_item_key) {
        // Sauvegarder les données comme meta du produit
        foreach ($wheel_data as $key => $value) {
            update_post_meta($product_id, $key, $value);
        }
        
        wp_send_json_success([
            'cart_item_key' => $cart_item_key,
            'redirect' => wc_get_checkout_url()
        ]);
    } else {
        wp_send_json_error('Erreur lors de l\'ajout au panier');
    }

    wp_die();
}

// Afficher les custom fields dans le panier
add_filter('woocommerce_get_item_data', 'display_wheel_custom_fields_cart', 10, 2);
function display_wheel_custom_fields_cart($item_data, $cart_item) {
    $fields_labels = array(
        'marque' => 'Marque',
        'annee' => 'Année',
        'modele' => 'Modèle',
        'motorisation' => 'Motorisation',
        'param_jantes' => 'Paramètres des Jantes',
        'taille' => 'Taille',
        'alesage_central' => 'Alésage central',
        'entraxe' => 'Entraxe',
        'deport' => 'Déport',
        'filletage' => 'Taille de Filetage',
        'params_identiques' => 'Paramètres identiques AV/AR',
        'modele_roue' => 'Modèle de roue',
        'couleur' => 'Couleur',
        'cache_moyeux' => 'Cache moyeux',
        'boulons' => 'Boulons'
    );

    foreach ($fields_labels as $key => $label) {
        if (isset($cart_item[$key]) && !empty($cart_item[$key])) {
            $item_data[] = array(
                'key' => $label,
                'value' => $cart_item[$key]
            );
        }
    }
    
    return $item_data;
}

// Sauvegarder les custom fields dans la commande
add_action('woocommerce_checkout_create_order_line_item', 'save_wheel_custom_fields_order', 10, 4);
function save_wheel_custom_fields_order($item, $cart_item_key, $values, $order) {
    $fields_labels = array(
        'marque' => 'Marque',
        'annee' => 'Année',
        'modele' => 'Modèle',
        'motorisation' => 'Motorisation',
        'param_jantes' => 'Paramètres des Jantes',
        'taille' => 'Taille',
        'alesage_central' => 'Alésage central',
        'entraxe' => 'Entraxe',
        'deport' => 'Déport',
        'filletage' => 'Taille de Filetage',
        'params_identiques' => 'Paramètres identiques AV/AR',
        'modele_roue' => 'Modèle de roue',
        'couleur' => 'Couleur',
        'cache_moyeux' => 'Cache moyeux',
        'boulons' => 'Boulons'
    );

    foreach ($fields_labels as $key => $label) {
        if (isset($values[$key])) {
            $item->add_meta_data($label, $values[$key]);
        }
    }
}
    //end custom field

    


// Modifier le prix du produit
add_filter('woocommerce_get_cart_item_from_session', 'apply_custom_price', 30, 2);
function apply_custom_price($cart_item, $values) {
    $product_id = $cart_item['product_id'];
    $custom_price = WC()->session->get("custom_price_{$product_id}");
    
    if ($custom_price) {
        $cart_item['data']->set_price($custom_price);
    }
    
    return $cart_item;
}

// Dans functions.php ou un plugin personnalisé
add_filter('woocommerce_account_orders_columns', 'add_order_description_column');
function add_order_description_column($columns) {
    $new_columns = array();
    
    foreach($columns as $key => $column) {
        $new_columns[$key] = $column;
        // Ajouter la colonne Description après la colonne Article
        if ($key === 'Article') {
            $new_columns['description'] = 'Description';
        }
    }
    
    return $new_columns;
}

// Ajouter le contenu de la colonne Description
add_action('woocommerce_my_account_my_orders_column_description', 'add_order_description_content');
function add_order_description_content($order) {
    // Récupérer les items de la commande
    foreach($order->get_items() as $item) {
        // Récupérer la description du produit
        $product = $item->get_product();
        if ($product) {
            echo wp_kses_post($product->get_short_description());
        }
    }
}

// Optionnel : Ajouter des styles CSS pour la nouvelle colonne
add_action('wp_head', 'add_order_description_styles');
function add_order_description_styles() {
    ?>
    <style>
        .woocommerce-orders-table__cell-description {
            max-width: 200px; /* Ajustez selon vos besoins */
            padding: 10px;
        }
    </style>
    <?php
}

?>
