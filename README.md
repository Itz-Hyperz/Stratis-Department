# Stratis Department (EJS)

EJS / Express conversion of [JakeHamblin/Stratis-Department](https://github.com/JakeHamblin/Stratis-Department) — a configurable landing page for roleplay emergency services departments.

Built using the structure of [Itz-Hyperz/EJS-WebTemplate](https://github.com/Itz-Hyperz/EJS-WebTemplate) (Express + EJS), simplified for a pure landing page (no auth / MySQL).

## Requirements

- Node.js 16+

## Install

```bash
npm install
```

## Config

Edit `config.json` (same options as the original PHP config):

| Section | What it controls |
|--------|-------------------|
| `information` | Department name, logo, background, meta tags, Apply button |
| `colors` | Background, accent, button text colors (hex **without** `#`) |
| `navbar` | Two-line department name + font sizes + nav links |
| `header` | Tagline, name font size, message text |

Police defaults are in `config.json`.  
Sheriff example: `config.sheriff.example.json` (copy over `config.json` if you want that theme).

**Note:** The original sheriff background is ~15MB. Place your own at `public/images/sheriff/background.png` if you use that theme.

## Run

```bash
npm start
```

Open `http://localhost:3000`.

## Structure

```
├── config.json                 # Main config
├── config.sheriff.example.json # Sheriff theme example
├── index.js                    # Express app
├── package.json
├── public/
│   ├── css/home.css            # Original styles
│   └── images/
│       ├── police/             # logo + background
│       ├── sheriff/            # logo (add background yourself)
│       └── icons/
└── src/views/
    ├── index.ejs               # Landing page
    └── 404.ejs
```

## Customization

- Change any value in `config.json` and restart (or use nodemon).
- Add real pages for `/roster`, `/structures`, `/discord`, `/apply` in `index.js`.
- Colors and CSS variables are injected the same way as the original PHP.

## Credits

- Original PHP: [JakeHamblin/Stratis-Department](https://github.com/JakeHamblin/Stratis-Department)
- Template style: [Itz-Hyperz/EJS-WebTemplate](https://github.com/Itz-Hyperz/EJS-WebTemplate)
