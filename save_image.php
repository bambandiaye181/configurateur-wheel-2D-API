<?php
// save_image.php
// Ajoutez ce code au début de save_image.php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Accès non autorisé');
}

// Limitez la taille des fichiers
$max_size = 5 * 1024 * 1024; // 5MB
if (strlen($image_data) > $max_size) {
    die(json_encode(['success' => false, 'error' => 'Image trop grande']));
}
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données base64 de l'image
    $data = json_decode(file_get_contents('php://input'), true);
    $base64_image = $data['image'];

    // Extraire les données binaires de l'image
    $base64_image = str_replace('data:image/png;base64,', '', $base64_image);
    $image_data = base64_decode($base64_image);

    // Générer un nom de fichier unique
    $filename = 'merged_' . uniqid() . '.png';
    $upload_path = '../../uploads/merged-images/' . $filename;
    log($upload_path);

    // Sauvegarder l'image
    if (file_put_contents($upload_path, $image_data)) {
        echo json_encode([
            'success' => true,
            'filename' => $filename,
            'url' => '../../uploads/merged-images/' . $filename
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => 'Erreur lors de la sauvegarde'
        ]);
    }
}
?>