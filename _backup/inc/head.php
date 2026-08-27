<?php
if (!isset($page_title)) {
    $page_title = "Let's See The Menu";
}
require_once __DIR__ . '/site-settings.php';
?>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="robots" content="noindex, nofollow">
<base href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>">
<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            "colors": {
                "on-tertiary-fixed-variant": "#643f00",
                "tertiary-container": "#855500",
                "on-primary-container": "#cbdaff",
                "on-tertiary-container": "#ffd29d",
                "on-secondary": "#ffffff",
                "surface-container-highest": "#e2e2e9",
                "background": "#f9f9ff",
                "error": "#ba1a1a",
                "on-tertiary-fixed": "#2a1800",
                "surface-bright": "#f9f9ff",
                "error-container": "#ffdad6",
                "on-secondary-fixed-variant": "#8b1a05",
                "on-primary-fixed": "#001a41",
                "tertiary-fixed-dim": "#ffb959",
                "secondary-fixed-dim": "#ffb4a5",
                "surface-container-lowest": "#ffffff",
                "on-primary-fixed-variant": "#004494",
                "surface-container-low": "#f3f3fb",
                "outline": "#737783",
                "on-primary": "#ffffff",
                "tertiary": "#654000",
                "on-surface": "#191b21",
                "surface-tint": "#295caf",
                "secondary-container": "#ff6d50",
                "primary": "#004496",
                "primary-fixed-dim": "#adc6ff",
                "primary-container": "#2a5db0",
                "tertiary-fixed": "#ffddb6",
                "on-background": "#191b21",
                "inverse-surface": "#2e3036",
                "on-secondary-fixed": "#3e0500",
                "outline-variant": "#c3c6d3",
                "on-error-container": "#93000a",
                "surface-dim": "#d9d9e1",
                "on-surface-variant": "#434751",
                "secondary": "#ad321b",
                "surface-container": "#ededf5",
                "inverse-on-surface": "#f0f0f8",
                "inverse-primary": "#adc6ff",
                "on-error": "#ffffff",
                "surface-container-high": "#e7e7ef",
                "secondary-fixed": "#ffdad3",
                "surface-variant": "#e2e2e9",
                "on-secondary-container": "#690d00",
                "surface": "#f9f9ff",
                "on-tertiary": "#ffffff",
                "primary-fixed": "#d8e2ff"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "md": "24px",
                "margin-mobile": "16px",
                "sm": "12px",
                "base": "8px",
                "xs": "4px",
                "gutter": "24px",
                "container-max": "1280px",
                "xl": "80px",
                "lg": "48px"
            },
            "fontFamily": {
                "label-sm": ["Be Vietnam Pro"],
                "display-hero-mobile": ["Plus Jakarta Sans"],
                "body-lg": ["Be Vietnam Pro"],
                "title-card": ["Plus Jakarta Sans"],
                "body-md": ["Be Vietnam Pro"],
                "label-xs": ["Be Vietnam Pro"],
                "display-hero": ["Plus Jakarta Sans"],
                "headline-md": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "600"}],
                "display-hero-mobile": ["40px", {"lineHeight": "1.1", "fontWeight": "700"}],
                "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                "title-card": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                "display-hero": ["56px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                "headline-lg": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}]
            }
        }
    }
}
</script>
<style>
.card-shadow { box-shadow: 0 4px 6px -1px rgba(0, 68, 150, 0.15), 0 2px 4px -1px rgba(0, 68, 150, 0.06); }
.card-hover { transition: all 0.3s ease; }
.card-hover:hover { transform: translateY(-2px); box-shadow: 0 10px 15px -3px rgba(0, 68, 150, 0.15), 0 4px 6px -2px rgba(0, 68, 150, 0.05); }
.state-card-hover:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 68, 150, 0.15), 0 4px 6px -4px rgba(0, 68, 150, 0.1);
}
/* Live-site style: icon slides in on hover (desktop) — no reserved empty width */
.btn-iconed {
    display: inline-flex;
    align-items: center;
    gap: 0;
    transition: background-color .15s ease-in-out, color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, transform .15s ease-in-out;
}
.btn-iconed > .material-symbols-outlined {
    font-size: 18px;
    line-height: 1;
    flex-shrink: 0;
}
.btn-iconed > .spn {
    position: relative;
}
@media only screen and (min-width: 1024px) {
    .btn-iconed > .material-symbols-outlined {
        display: inline-block;
        width: 0;
        max-width: 0;
        margin: 0;
        opacity: 0;
        overflow: hidden;
        transform: translateX(-8px) scale(1.2);
        transition: width .15s ease-out, max-width .15s ease-out, margin .15s ease-out, opacity .15s ease-out, transform .15s ease-out;
    }
    .btn-iconed:hover > .material-symbols-outlined {
        width: 18px;
        max-width: 18px;
        margin-right: 0.35rem;
        opacity: 1;
        overflow: visible;
        transform: translateX(0) scale(0.9);
    }
    .btn-iconed-outline:hover {
        background-color: #004496;
        border-color: #004496;
        color: #fff;
    }
    .btn-iconed-outline:hover > .material-symbols-outlined,
    .btn-iconed-outline:hover > .spn {
        color: #fff;
    }
}
@media only screen and (max-width: 1023px) {
    .btn-iconed > .material-symbols-outlined {
        margin-right: 0.35rem;
    }
}
</style>
