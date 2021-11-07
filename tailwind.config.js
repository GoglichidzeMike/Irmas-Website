module.exports = {
    purge: {
        enabled: true,
        content: [
            "./resources/css.app.css",
            "./resources/js/app.js",
            "./resources/views/about/index.blade.php",
            "./resources/views/auth/login.blade.php",
            "./resources/views/auth/register.blade.php",
            "./resources/views/blogs/index.blade.php",
            "./resources/views/show.blade.php",
            "./resources/views/dashboard/events/create.blade.php",
            "./resources/views/dashboard/events/edit.blade.php",
            "./resources/views/dashboard/events/index.blade.php",
            "./resources/views/dashboard/events/show.blade.php",
            "./resources/views/dashboard/blogs/create.blade.php",
            "./resources/views/dashboard/blogs/edit.blade.php",
            "./resources/views/dashboard/blogs/index.blade.php",
            "./resources/views/dashboard/blogs/show.blade.php",
            "./resources/views/dashboard/includes/contact.blade.php",
            "./resources/views/dashboard/includes/nav.blade.php",
            "./resources/views/dashboard/includes/register.blade.php",
            "./resources/views/dashboard/leads/index.blade.php",
            "./resources/views/dashboard/leads/show.blade.php",
            "./resources/views/events/index.blade.php",
            "./resources/views/events/show.blade.php",
            "./resources/views/layouts/app.blade.php",
            "./resources/views/layouts/home.blade.php",
            "./resources/views/home.blade.php",
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
        },
        minHeight: {
            252: "290px",
            0: "0",
            "1/4": "25%",
            "1/2": "50%",
            "3/4": "75%",
            full: "100%",
            screen: "100vh",
        },

        extend: {
            backgroundImage: (theme) => ({
                "blogs-index": "url('/image/blogs-bg.jpg')",
                "events-index": "url('/image/events-bg.jpg')",
            }),
            colors: {
                primary: "#105650",
                secondary: "#55C187",
                dark: "#1F1F1F",
                third: "#6C9593",
            },
            fontFamily: {
                sans: ["firago"],
            },
            width: {
                44: "44%",
                95: "95%",
            },
            height: {
                570: "570px",
            },
            maxWidth: {
                300: "300px",
                412: "412px",
            },
        },
    },
    variants: {},
    plugins: [],
};
