    /** @type {import('tailwindcss').Config} */
    import plugin from "tailwindcss/plugin";

    export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            "home-hero-pattern": "url('/public/images/code-2400-1600.jpg')",
        },
        textShadow: {
            sm: '0 1px 2px var(--tw-shadow-color)',
            DEFAULT: '0 2px 4px var(--tw-shadow-color)',
            lg: '0 8px 16px var(--tw-shadow-color)',
        },
    }
  },
  plugins: [
      plugin(function ({ matchUtilities, theme }) {
          matchUtilities(
              {
                  'text-shadow': (value) => ({
                      textShadow: value,
                  }),
              },
              { values: theme('textShadow') }
          )
      }),
  ],
}

