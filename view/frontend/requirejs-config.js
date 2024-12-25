var config = {
    "paths": {
        "bootstrap533": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min",
        "bootstrap523": "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min",
        "bootstrap513": "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min",
        "bootstrap462": "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min",
    },

    map: {
        "*": {
            "customjs533": "HK2_AddBootstrap5/js/init533",
            "customjs523": "HK2_AddBootstrap5/js/init523",
            "customjs513": "HK2_AddBootstrap5/js/init513",
            "customjs462": "HK2_AddBootstrap5/js/init462",
        }
    },

    shim: {
        'bootstrap462': {
            deps: ['jquery']
        },
        'bootstrap513': {
            deps: ['jquery']
        },
        'bootstrap523': {
            deps: ['jquery']
        },
        'bootstrap533': {
            deps: ['jquery']
        }
    }
};
