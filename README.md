# Legacy WordPress Theme

A custom WordPress theme built with the [_tw (Underscore Tailwind) framework](https://underscoretw.com/), featuring modern development tools and Tailwind CSS v4.

> **⚠️ Important: Git Repository Location**
> The `.git` directory is located in `/app/public/wp-content/themes/legacy/` only.
> **Always run Git commands from the theme directory**, not from the project root.
> See [Local's documentation on developing with Git](https://localwp.com/help-docs/advanced/developing-with-local-and-github/#creating-a-new-git-repository) for more details.

> **📋 Project Management**
> All tasks, features, and bugs are tracked in our [Notion project board](https://www.notion.so/Legacy-Fit-Web-development-2419225c522d80529ec5d0615dff207d).
> Check here for priorities and task assignments before starting work.

## Development environment setup

To ensure consistency across the team and enable smooth pull requests, follow these setup instructions:

### Prerequisites

1. **Install Local by Flywheel**
   - Download and install the latest version from [localwp.com](https://localwp.com/)
   - Connect with your Flywheel account

2. **Flywheel Account Access**
   - Organization: Neurotic
   - Project: Legacy
   - Access WordPress admin through Flywheel dashboard via dedicated button without username/password
   - Admin access: [app.getflywheel.com/org/neurotic/legacy/](https://app.getflywheel.com/org/neurotic/legacy/)

3. **Environment URLs**
   - **Production**: https://legacyfit.flywheelsites.com/
   - **Staging**: https://legacyfit.flywheelstaging.com/
   - WordPress Username: `legacyfit`

### Repository Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/manufarez/legacy
   ```

2. **Theme Location**
   - All theme code is located in: `/Users/yourusername/code/legacy/app/public/wp-content/themes/legacy`
   - Only the theme folder contents are tracked in Git

### Getting Started

1. **Install dependencies and build assets**
   ```bash
   npm install && npm run dev
   ```

   > **Note**: Composer is optional. The PHP development tools (PHPCS, etc.) are only needed if you're writing PHP code. Local by Flywheel already provides PHP and WordPress core.

2. **Start development**
   ```bash
   # Run this before coding to enable Tailwind CSS hot reloading
   npm run watch
   ```

3. **Build for production**
   ```bash
   # Run this before deploying to create optimized assets
   npm run bundle
   ```

## Development Workflow

### Available Commands

| Command | Description |
|---------|-------------|
| `npm run dev` | Build assets for development |
| `npm run watch` | Watch files and rebuild on changes |
| `npm run prod` | Build optimized assets for production |
| `npm run bundle` | Create deployable theme zip file |
| `npm run lint` | Check JavaScript code quality |
| `npm run lint-fix` | Auto-fix JavaScript issues |

### Code Standards

- **JavaScript**: ESLint with WordPress and Prettier standards
- **PHP**: WordPress Coding Standards via PHPCS
- **CSS**: Tailwind CSS with custom design tokens
- All code must pass linting before committing

### File Structure

```
legacy/
├── theme/              # WordPress template files
│   ├── functions.php   # Theme functionality
│   ├── style.css      # Compiled CSS (don't edit directly)
│   ├── js/            # Compiled JavaScript (don't edit directly)
│   ├── acf-json/      # ACF field group JSON files (version controlled)
│   └── *.php          # Template files
├── javascript/         # Source JavaScript files (edit these)
├── tailwind/          # Tailwind CSS source files
├── package.json       # Node dependencies and scripts
└── composer.json      # PHP dependencies
```

### Important Notes

1. **Always run `npm run watch` during development** - This enables Tailwind CSS compilation and JavaScript bundling
2. **Edit source files only** - Never edit files in `theme/js/` or `theme/style.css` directly
3. **Test before deploying** - Run `npm run prod` locally and test thoroughly
4. **Use the Legacy prefix** - All custom functions and classes should use the `legacy_` prefix

## Deployment

1. Run `npm run bundle` to create `legacy.zip`
2. Ensure all changes are committed and pushed
3. Upload through Flywheel dashboard: Push to An existing site > Legacy > Environment type: Production > What files should we include? > Files: select files > All modified files > Push
4. If you made a database change, click "Database" too and warn the team that they should pull db changes.

## Have I made a database change? When database sync is required

While some data is version controlled via Git, some WordPress data still requires database synchronization between environments:

| Data Type | Requires DB Sync |
|-----------|------------------|
| **Pages & Posts** | ✅ Yes |
| **Media Files** | ✅ Yes |
| **Menu Structure** | ✅ Yes |
| **Plugin Settings** | ✅ Yes |
| **ACF Field Groups** | ❌ No |
| **Theme Settings and styling** | ❌ No |
| **Custom Post Types** | ❌ No |
| **Taxonomies** | ❌ No |
| **Custom Tailwind CSS** | ❌ No |

Any time a data change requires a database sync, push your code **with Database checkbox ticked** and warn the team and ask for pull after the sync is complete.

## Theme Foundation

This theme is built on [_tw (Underscore Tailwind)](https://underscoretw.com/docs/), a WordPress starter theme that combines:
- Underscores (_s) WordPress starter theme
- Tailwind CSS for utility-first styling
- Modern build tools for optimal performance

## Contributing

1. Create a feature branch from `main`
2. Make your changes
3. Ensure all linting passes
4. Test thoroughly in local environment
5. Create a pull request with clear description

## Advanced Custom Fields (ACF) Workflow

### ACF JSON Sync

This theme uses ACF's JSON sync feature to version control field configurations:

1. **Automatic Sync**: Field groups are automatically saved as JSON files in `theme/acf-json/`
2. **Version Control**: All ACF field configurations are tracked in Git
3. **No Database Sync Needed**: Field groups sync automatically across environments

### Working with ACF

1. **Creating/Editing Fields**:
   - Make changes in WordPress admin as normal
   - JSON files are automatically created/updated in `theme/acf-json/`
   - Commit these JSON files to version control

2. **Syncing Fields**:
   - On new environments, fields automatically load from JSON
   - If you see "Sync Available" in ACF admin, click to sync from JSON
   - This ensures database matches the JSON files

## Support

For theme-specific questions or issues, please refer to:
- [_tw Documentation](https://underscoretw.com/docs/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- Project repository: [github.com/manufarez/legacy](https://github.com/manufarez/legacy)
