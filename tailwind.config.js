module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
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
            },
        },
    },
    variants: {},
    plugins: [],
};
