# Forge — Gym & Fitness Block Theme

**Forge** is a high-energy WordPress block theme built for gyms and fitness studios. Near-black canvas, molten orange accents, condensed display typography, class schedules, trainer profiles, membership tiers and transformation stories — a premium athletic brand site out of the box.

- **Author:** Nour El Houda Bouajila
- **Portfolio:** https://nour-el-houda-bouajila.rf.gd/
- **GitHub:** https://github.com/Nourhb
- **LinkedIn:** https://www.linkedin.com/in/nour-el-houda-bouajila
- **Version:** 1.0.0 · **License:** GPL-2.0-or-later · **Requires:** WordPress 6.4+, PHP 7.4+

## Features

- **Full Site Editing** — edit headers, footers, templates and every pixel with the block editor
- **Complete theme.json design system** — ink/coal/steel/forge/ember palette, Oswald display + Inter body, fluid type scale, glow shadows
- **10 hand-built block patterns** — hero, class schedule table, trainers team, membership pricing, transformations, animated stats, gallery, testimonials, free-week CTA, FAQ
- **"Ice" style variation** — one-click cool blue-steel alternative
- **Photo-rich by default** — real gym photography wired into hero, trainers, gallery, transformations and CTA
- **Motion with manners** — scroll reveals, animated counters, back-to-top; all disabled under `prefers-reduced-motion`
- **Accessibility** — skip-friendly landmarks, visible focus states, semantic markup, keyboard-friendly navigation
- **Translation-ready** — `forge` text domain

## Installation

1. Download or clone this repository.
2. Copy the `forge-fitness-theme` folder into `wp-content/themes/` (rename the folder to `forge` if you like).
3. In WordPress, go to **Appearance → Themes** and activate **Forge**.
4. Open **Appearance → Editor** to customize templates, or insert any **Forge** pattern from the block inserter.

No plugins required. Google Fonts (Oswald + Inter) load automatically; the theme works offline with system fallbacks.

## Pattern catalog

| Pattern | Slug | What it is |
|---|---|---|
| Hero Gym | `forge/hero-gym` | Full-viewport hero, headline, dual CTAs |
| Class Schedule | `forge/classes-schedule` | Weekly timetable, heat-styled table |
| Trainers Team | `forge/trainers-team` | 4 trainer profiles with specialties |
| Membership Pricing | `forge/pricing-membership` | 3 tiers: Off-Peak $29, All Access $49, Elite $89 |
| Transformations | `forge/transformations` | Member success stories |
| Stats Band | `forge/stats-band` | Animated counters (members, coaches, classes) |
| Training Gallery | `forge/gallery-training` | 4-photo gallery |
| Member Testimonials | `forge/testimonials-members` | 3 reviews with ratings |
| Free Week CTA | `forge/trial-cta` | Full-width trial banner |
| FAQ | `forge/faq-fitness` | 4-question accordion |

## Customization

- **Colors & fonts:** everything flows from `theme.json` — tweak the palette, type scale or spacing there.
- **Style variation:** switch to the **Ice** cool style from the Site Editor's Styles panel.
- **Custom page template:** `page-wide.html` (1280px canvas) is registered as a page template.
- **Block styles:** Forge Outline (button), Forge Card (group), Forge Schedule (table), Forge Display (heading).
- **Front-end script:** `assets/js/theme.js` handles scroll reveals, stat counters and back-to-top — vanilla JS, no dependencies.

## Changelog

### 1.0.0
- Initial release: 8 templates, 2 template parts, 10 block patterns, Ice style variation, theme.js interactions, full a11y pass.

## License

GNU General Public License v2 or later — see `LICENSE`.
