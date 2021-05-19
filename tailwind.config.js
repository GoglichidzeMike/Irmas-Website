module.exports = {
    purge: [],
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
                "blogs-index": "url('/image/blogs-bg.svg')",
                "events-index": "url('/image/events-bg.svg')",
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
