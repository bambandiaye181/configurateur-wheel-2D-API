// wp-content/plugins/image-merger/js/image-merger-module.js

// Création d'un module global
window.ImageMerger = {
    async mergeAndSaveImages(images) {
        if (!Array.isArray(images) || images.length === 0) {
            throw new Error('Un tableau d\'URLs d\'images est requis');
        }

        try {
            // Fusion des images
            const b64 = await mergeImages(images);
            
            // Envoi à WordPress
            const formData = new FormData();
            formData.append('action', 'save_merged_image');
            formData.append('image', b64);
            formData.append('nonce', imageMergerVars.nonce);

            const response = await fetch(imageMergerVars.ajaxurl, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();
            
            if (data.success) {
                return {
                    url: data.data.url,
                    previewBase64: b64
                };
            } else {
                throw new Error('Erreur lors de la sauvegarde');
            }
        } catch (err) {
            console.error('Erreur de fusion:', err);
            throw err;
        }
    }
};