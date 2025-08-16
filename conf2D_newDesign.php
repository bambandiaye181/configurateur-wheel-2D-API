<?php
/*
    Template Name: Configurateur 2D
*/

// Permet l'utilisation comme page template WordPress tout en restant autonome si chargé directement
if (function_exists('get_header')) {
    get_header();
}
?>
<div id="configurateur-2d" class="conf2d-root">
    <div class="conf2d-topbar">
        <div class="conf2d-steps">
            <button class="conf2d-step is-active" data-step="model">Modèle</button>
            <button class="conf2d-step" data-step="params">Paramètres</button>
            <button class="conf2d-step" data-step="trims">Finitions</button>
            <button class="conf2d-step" data-step="summary">Résumé</button>
        </div>
    </div>
    <div class="conf2d-layout">
        <aside class="conf2d-sidebar">
            <div class="conf2d-panel conf2d-panel-model is-active" data-panel="model">
                <h3>Choix du véhicule - Marque</h3>
                <div class="conf2d-region">
                    <span class="conf2d-region-label">Région</span>
                    <div class="conf2d-region-pills">
                        <button class="pill is-selected" data-region="europe">Europe</button>
                        <button class="pill" data-region="us">USA</button>
                        <button class="pill" data-region="asia">Asie</button>
                    </div>
                </div>
                <div class="conf2d-brand-list" id="conf2d-brand-list"></div>
            </div>

            <div class="conf2d-panel conf2d-panel-params" data-panel="params">
                <h3>Paramètres</h3>
                <div class="conf2d-section">
                    <label class="conf2d-section-title">Couleur carrosserie</label>
                    <div class="conf2d-color-swatches" id="conf2d-color-swatches"></div>
                </div>
                <div class="conf2d-section">
                    <label class="conf2d-section-title">Jantes</label>
                    <div class="conf2d-wheel-options" id="conf2d-wheel-options"></div>
                </div>
            </div>

            <div class="conf2d-panel conf2d-panel-trims" data-panel="trims">
                <h3>Finitions</h3>
                <div class="conf2d-trim-options" id="conf2d-trim-options"></div>
            </div>

            <div class="conf2d-panel conf2d-panel-summary" data-panel="summary">
                <h3>Résumé</h3>
                <div class="conf2d-summary" id="conf2d-summary"></div>
                <div class="conf2d-summary-actions">
                    <button id="conf2d-reset">Recommencer</button>
                    <button id="conf2d-download">Télécharger l'aperçu</button>
                </div>
            </div>
        </aside>
        <main class="conf2d-stage">
            <div class="conf2d-canvas-wrap">
                <img id="conf2d-vehicle" alt="Aperçu véhicule" />
                <div class="conf2d-color-overlay" id="conf2d-color-overlay"></div>
            </div>
            <div class="conf2d-stage-actions">
                <button class="conf2d-primary" id="conf2d-next">Continuer</button>
            </div>
        </main>
    </div>
</div>

<style>
    /* Reset minimal pour occuper tout l'écran */
    .conf2d-root {
        position: relative;
        inset: 0;
        display: flex;
        flex-direction: column;
        min-height: 80vh;
        background: #0e0e10;
        color: #e6e6e9;
        font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        /* Full-bleed: sortir du conteneur du thème pour occuper toute la largeur viewport */
        margin-left: calc(50% - 50vw);
        margin-right: calc(50% - 50vw);
        top:-150;
    }

    .conf2d-topbar {
        background: #0a0a0c;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        padding: 8px 16px;
    }

    .conf2d-steps {
        display: flex;
        gap: 12px;
    }

    .conf2d-step {
        appearance: none;
        border: none;
        padding: 10px 16px;
        border-radius: 8px;
        background: #1a1a1f;
        color: #c9c9d1;
        cursor: pointer;
        font-weight: 600;
        letter-spacing: .2px;
    }

    .conf2d-step.is-active {
        background: #2a2a31;
        color: #fff;
    }

    .conf2d-layout {
        display: grid;
        grid-template-columns: 380px 1fr;
        min-height: 70vh;
    }

    .conf2d-sidebar {
        background: radial-gradient(120% 120% at 0% 0%, #1b1d24 0%, #101218 60%, #0b0c10 100%);
        border-right: 1px solid rgba(255, 255, 255, 0.06);
        padding: 18px 16px 24px 16px;
        overflow: auto;
    }

    .conf2d-sidebar h3 {
        margin: 4px 0 12px;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: #b6b6bf;
    }

    .conf2d-region {
        margin-bottom: 12px;
    }

    .conf2d-region-label {
        display: block;
        font-size: 12px;
        opacity: .8;
        margin-bottom: 6px;
    }

    .conf2d-region-pills {
        display: flex;
        gap: 8px;
    }

    .pill {
        background: #1e2027;
        color: #d6d6dd;
        border: 1px solid #2a2d37;
        border-radius: 999px;
        padding: 6px 12px;
        cursor: pointer;
    }

    .pill.is-selected {
        background: #2c303b;
        border-color: #3b3f4b;
    }

    .conf2d-brand-list {
        margin-top: 8px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .brand-item {
        display: grid;
        grid-template-columns: 56px 1fr auto;
        align-items: center;
        padding: 12px 10px;
        border-radius: 10px;
        background: #15171d;
        border: 1px solid #22242d;
        cursor: pointer;
        transition: .15s ease;
    }

    .brand-item:hover {
        transform: translateY(-1px);
        background: #191b22;
    }

    .brand-logo {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #232632;
        display: grid;
        place-items: center;
        font-weight: 900;
        color: #fff;
    }

    .brand-name {
        font-weight: 700;
        letter-spacing: .03em;
    }

    .brand-meta {
        font-size: 11px;
        opacity: .7;
    }

    .conf2d-section {
        margin: 12px 0 16px;
    }

    .conf2d-section-title {
        display: block;
        margin-bottom: 8px;
        font-size: 12px;
        opacity: .8;
    }

    .conf2d-color-swatches {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 8px;
    }

    .swatch {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 2px solid #2e323e;
        cursor: pointer;
        position: relative;
    }

    .swatch.is-selected {
        outline: 2px solid #7aa2ff;
        outline-offset: 2px;
    }

    .conf2d-wheel-options {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .wheel-item {
        background: #15171d;
        border: 1px solid #22242d;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    }

    .wheel-dot {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: linear-gradient(135deg, #1f2026, #4f5468);
        box-shadow: inset 0 0 0 2px #2a2e3a;
    }

    .wheel-item.is-selected {
        outline: 2px solid #7aa2ff;
    }

    .conf2d-trim-options {
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .trim-item {
        background: #15171d;
        border: 1px solid #22242d;
        border-radius: 10px;
        padding: 12px;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 8px;
        align-items: center;
        cursor: pointer;
    }

    .trim-item .price {
        opacity: .85;
        font-weight: 700;
    }

    .trim-item.is-selected {
        outline: 2px solid #7aa2ff;
    }

    .conf2d-stage {
        position: relative;
        background: #0b0c10;
        display: grid;
        grid-template-rows: 1fr auto;
    }

    .conf2d-canvas-wrap {
        position: relative;
        height: 100%;
        display: grid;
        place-items: center;
        overflow: hidden;
    }

    #conf2d-vehicle {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(1.02) contrast(1.02);
    }

    .conf2d-color-overlay {
        position: absolute;
        inset: 0;
        mix-blend-mode: multiply;
        pointer-events: none;
        opacity: .0;
        transition: opacity .2s ease;
    }

    .conf2d-stage-actions {
        display: flex;
        justify-content: flex-end;
        padding: 12px 16px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
    }

    .conf2d-primary {
        background: #4c7dff;
        border: none;
        color: #fff;
        font-weight: 700;
        padding: 10px 16px;
        border-radius: 10px;
        cursor: pointer;
    }

    /* Panels visibility */
    .conf2d-panel {
        display: none;
    }

    .conf2d-panel.is-active {
        display: block;
    }

    /* Responsif */
    @media (max-width: 1024px) {
        .conf2d-layout {
            grid-template-columns: 1fr;
        }

        .conf2d-sidebar {
            order: 2;
        }

        .conf2d-stage {
            order: 1;
            height: 50vh;
        }
    }
</style>

<script>
    (function () {
        const el = (sel, root = document) => root.querySelector(sel);
        const els = (sel, root = document) => Array.from(root.querySelectorAll(sel));

        // Données simples pour la démonstration
        const DATA = {
            regions: ["europe", "us", "asia"],
            brands: {
                europe: [
                    {
                        key: "aiways", name: "Aiways", models: [
                            { key: "u5", name: "U5", image: "https://images.unsplash.com/photo-1619767886558-efdc259cde1b?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    },
                    {
                        key: "aixam", name: "Aixam", models: [
                            { key: "city", name: "City", image: "https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    },
                    {
                        key: "alfa", name: "Alfa Romeo", models: [
                            { key: "giulia", name: "Giulia", image: "https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    },
                    {
                        key: "alpine", name: "Alpine", models: [
                            { key: "a110", name: "A110", image: "https://images.unsplash.com/photo-1519648023493-d82b5f8d7b8a?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    },
                    {
                        key: "aro", name: "ARO", models: [
                            { key: "24", name: "24", image: "https://images.unsplash.com/photo-1511919884226-fd3cad34687c?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    }
                ],
                us: [
                    {
                        key: "ford", name: "Ford", models: [
                            { key: "mustang", name: "Mustang", image: "https://images.unsplash.com/photo-1494976388531-d1058494cdd8?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    },
                    {
                        key: "tesla", name: "Tesla", models: [
                            { key: "model3", name: "Model 3", image: "https://images.unsplash.com/photo-1549923746-c502d488b3ea?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    }
                ],
                asia: [
                    {
                        key: "lexus", name: "Lexus", models: [
                            { key: "rx", name: "RX", image: "https://images.unsplash.com/photo-1518306727298-4c1780bbd1c8?q=80&w=1920&auto=format&fit=crop" }
                        ]
                    }
                ]
            },
            colors: [
                { key: "white", name: "Blanc", hex: "#e9edf2" },
                { key: "silver", name: "Argent", hex: "#cfd6df" },
                { key: "gray", name: "Gris", hex: "#747a87" },
                { key: "black", name: "Noir", hex: "#1b1b1f" },
                { key: "red", name: "Rouge", hex: "#a0262b" },
                { key: "blue", name: "Bleu", hex: "#1c3f87" }
            ],
            wheels: [
                { key: "std18", name: "18'' Standard" },
                { key: "sport20", name: "20'' Sport" }
            ],
            trims: [
                { key: "base", name: "Base", priceDelta: 0 },
                { key: "plus", name: "Plus", priceDelta: 3500 },
                { key: "premium", name: "Premium", priceDelta: 8200 }
            ]
        };

        const state = {
            step: "model",
            region: "europe",
            brand: null,
            model: null,
            color: "white",
            wheel: "std18",
            trim: "base",
            basePrice: 42000
        };

        function formatPrice(num) {
            return new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR' }).format(num);
        }

        function renderBrands() {
            const list = el('#conf2d-brand-list');
            list.innerHTML = '';
            const brands = DATA.brands[state.region] || [];
            brands.forEach((b) => {
                const item = document.createElement('div');
                item.className = 'brand-item';
                item.innerHTML = `
                    <div class="brand-logo">${b.name.substring(0, 2).toUpperCase()}</div>
                    <div class="brand-name">${b.name}<div class="brand-meta">${b.models.length} modèle(s)</div></div>
                    <div><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 18l6-6-6-6" stroke="#9aa3b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                `;
                item.addEventListener('click', () => {
                    state.brand = b.key;
                    state.model = b.models[0].key;
                    updateVehicleImage(b.models[0].image);
                    goToStep('params');
                });
                list.appendChild(item);
            });
        }

        function updateVehicleImage(src) {
            el('#conf2d-vehicle').src = src;
        }

        function renderColors() {
            const wrap = el('#conf2d-color-swatches');
            wrap.innerHTML = '';
            DATA.colors.forEach(c => {
                const s = document.createElement('button');
                s.className = 'swatch' + (state.color === c.key ? ' is-selected' : '');
                s.style.background = c.hex;
                s.title = c.name;
                s.addEventListener('click', () => {
                    state.color = c.key;
                    // Simule la couleur via un overlay multiply
                    const overlay = el('#conf2d-color-overlay');
                    overlay.style.background = c.hex;
                    overlay.style.opacity = c.key === 'white' ? 0.0 : 0.6;
                    renderColors();
                    updateSummary();
                });
                wrap.appendChild(s);
            });
        }

        function renderWheels() {
            const wrap = el('#conf2d-wheel-options');
            wrap.innerHTML = '';
            DATA.wheels.forEach(w => {
                const i = document.createElement('div');
                i.className = 'wheel-item' + (state.wheel === w.key ? ' is-selected' : '');
                i.innerHTML = `<div class="wheel-dot"></div><div>${w.name}</div>`;
                i.addEventListener('click', () => {
                    state.wheel = w.key;
                    renderWheels();
                    updateSummary();
                });
                wrap.appendChild(i);
            });
        }

        function renderTrims() {
            const wrap = el('#conf2d-trim-options');
            wrap.innerHTML = '';
            DATA.trims.forEach(t => {
                const i = document.createElement('div');
                i.className = 'trim-item' + (state.trim === t.key ? ' is-selected' : '');
                i.innerHTML = `<div><div style="font-weight:700">${t.name}</div><div style="opacity:.7;font-size:12px">Options sélectionnées incluses</div></div><div class="price">${formatPrice(state.basePrice + t.priceDelta)}</div>`;
                i.addEventListener('click', () => {
                    state.trim = t.key;
                    renderTrims();
                    updateSummary();
                });
                wrap.appendChild(i);
            });
        }

        function updateSummary() {
            const summary = el('#conf2d-summary');
            const trim = DATA.trims.find(t => t.key === state.trim);
            const wheel = DATA.wheels.find(w => w.key === state.wheel);
            const color = DATA.colors.find(c => c.key === state.color);
            const regionBrands = DATA.brands[state.region] || [];
            const brandObj = regionBrands.find(b => b.key === state.brand);
            const modelObj = brandObj ? brandObj.models.find(m => m.key === state.model) : null;

            const price = state.basePrice + (trim ? trim.priceDelta : 0);
            summary.innerHTML = `
                <div style="display:grid;grid-template-columns:160px 1fr;gap:14px;align-items:center;">
                    <div style="background:#101218;border:1px solid #232735;border-radius:12px;overflow:hidden;aspect-ratio:16/10">
                        <img src="${el('#conf2d-vehicle').src}" alt="mini" style="width:100%;height:100%;object-fit:cover"/>
                    </div>
                    <div>
                        <div style="font-weight:800;font-size:18px">${brandObj ? brandObj.name : ''} ${modelObj ? modelObj.name : ''}</div>
                        <div style="opacity:.8;margin-top:2px">${color ? color.name : ''} • ${wheel ? wheel.name : ''} • Finition ${trim ? trim.name : ''}</div>
                        <div style="margin-top:8px;font-weight:800">${formatPrice(price)}</div>
                    </div>
                </div>
            `;
        }

        function goToStep(step) {
            state.step = step;
            els('.conf2d-step').forEach(b => b.classList.toggle('is-active', b.dataset.step === step));
            els('.conf2d-panel').forEach(p => p.classList.toggle('is-active', p.dataset.panel === step));
        }

        // Interactions
        els('.conf2d-step').forEach(b => {
            b.addEventListener('click', () => {
                goToStep(b.dataset.step);
            });
        });

        el('#conf2d-next').addEventListener('click', () => {
            const order = ['model', 'params', 'trims', 'summary'];
            const idx = Math.max(0, order.indexOf(state.step));
            const next = order[Math.min(order.length - 1, idx + 1)];
            goToStep(next);
        });

        el('#conf2d-reset').addEventListener('click', () => {
            state.region = 'europe';
            state.brand = null;
            state.model = null;
            state.color = 'white';
            state.wheel = 'std18';
            state.trim = 'base';
            el('#conf2d-color-overlay').style.opacity = 0;
            renderBrands();
            renderColors();
            renderWheels();
            renderTrims();
            updateSummary();
            goToStep('model');
        });

        // Region selector
        els('.pill').forEach(p => {
            p.addEventListener('click', () => {
                els('.pill').forEach(pp => pp.classList.remove('is-selected'));
                p.classList.add('is-selected');
                state.region = p.dataset.region;
                renderBrands();
            });
        });

        // Téléchargement rapide de l'aperçu (canvas via html2canvas si dispo, sinon fallback)
        el('#conf2d-download').addEventListener('click', async () => {
            try {
                if (!window.html2canvas) {
                    // Chargement dynamique léger
                    await new Promise((resolve, reject) => {
                        const s = document.createElement('script');
                        s.src = 'https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js';
                        s.onload = resolve; s.onerror = reject; document.head.appendChild(s);
                    });
                }
                const node = el('.conf2d-canvas-wrap');
                const canvas = await window.html2canvas(node, { useCORS: true, backgroundColor: '#0b0c10' });
                const link = document.createElement('a');
                link.download = 'configurateur-apercu.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            } catch (e) {
                alert('Téléchargement non disponible');
            }
        });

        // Initialisation
        renderBrands();
        renderColors();
        renderWheels();
        renderTrims();
        // Image par défaut
        updateVehicleImage('https://images.unsplash.com/photo-1549921296-3a6b3f0a0d37?q=80&w=1920&auto=format&fit=crop');
        updateSummary();
    })();
</script>

<?php if (function_exists('get_footer')) {
    get_footer();
} ?>