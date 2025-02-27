@extends('layouts.app')

@section('contents')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card card-lg">
                        <div class="card-body markdown">
                            <h1>Changelog</h1>
                            <h2>1.0.0</h2>
                            <h3>Minor Changes</h3>
                            <ul>
                                <li>c276a8b: Add new <code>Tag</code> component</li>
                                <li>d380224: Add customizable Star Ratings component using
                                    <code>star-rating.js</code> library
                                </li>
                                <li>47cd6c1: Add <code>flags.html</code> page with list of all flags</li>
                                <li>be67ab6: Update CSS class from <code>text-muted</code> to
                                    <code>text-secondary</code> for better Bootstrap compatibility
                                </li>
                                <li>080c746: Adding <code>alerts.html</code> page with example of alerts.</li>
                                <li>b381273: Change primary color value to new Tabler branding</li>
                                <li>75619dd: Unify dark mode with latest Bootstrap API and improve dark mode
                                    elements</li>
                                <li>cc82dbf: New Chat component</li>
                                <li>5a03643: Adjusting form element sizes for enhanced mobile devices
                                    compatibility</li>
                                <li>be14607: Add new color picker component using <code>coloris.js</code>
                                    library</li>
                                <li>d046570: Update Tabler Icons to version 2.23 with 18 new icons added</li>
                                <li>5488c50: New page with payment providers:
                                    <code>payment-providers.html</code>
                                </li>
                                <li>5488c50: Add support for new payment providers: 2c2p, Adyen, Affirm, Alipay
                                    Plus, Allegro Pay, Amazon Pay, Apple Pay, Autopay, Binance USD, Bkash, Cash
                                    App, Chime, EasyPaisa, Ethereum, Google Pay, HubSpot, iDeal, Litecoin,
                                    Mercado Pago,
                                    MetaMask, MoneyGram, OpenSea, Payconiq, Payka, Payline, PayPo, Paysafe,
                                    Poli, Revolut Pay, Samsung Pay, Shop Pay, Solana, Spingo, Stax, Tether, True
                                    USD, Venmo, WeChat Pay, Wise, Zelle</li>
                            </ul>
                            <h3>Patch Changes</h3>
                            <ul>
                                <li>293d0a4: Change Twitter to X brand</li>
                                <li>fd0935a: Updated link to icons documentation</li>
                                <li>1cf27dc: Dependencies update</li>
                                <li>041f4e4: Order menu items alphabetically</li>
                                <li>20cad01: Automatically retrieve and display the changelog from the
                                    CHANGELOG.md file.</li>
                                <li>34f3efc: Initialize Visual Studio Code config</li>
                                <li>7ba7717: Make horizontal rule direction aware</li>
                                <li>063ef58: Update Tabler Illustrations to v1.5</li>
                                <li>5e2c975: Update Tabler Icons to v3.29.0</li>
                                <li>9d5f7ca: Remove unused dependencies from <code>package.json</code></li>
                                <li>be69fd6: Replace Jekyll with Eleventy</li>
                                <li>2f5fad6: Dependencies update</li>
                                <li>dfd7c88: Update TinyMCE to v7.0</li>
                                <li>056df18: Fix text color in dark version of navbar</li>
                                <li>17327dc: Remove invalid <code>z-index</code> setting for dropdowns</li>
                                <li>4ff077a: Update Tabler Icons to version 2.21 with 18 new icons added</li>
                                <li>867c8dd: Update Tabler Emails to v2.0</li>
                                <li>d8605f2: Init changelog script</li>
                                <li>89c6234: Adding Two-Step Verification Pages</li>
                                <li>f6e885b: Replace <code>.page-center</code> with <code>.my-auto</code> in
                                    single page layouts</li>
                                <li>7aa216f: Add border-opacity variable for improved color utility</li>
                                <li>88eb413: Fix icon display issues in the Star Ratings component</li>
                                <li>78392b6: Fix <code>color</code> of disabled <code>dropdown-item</code> in
                                    Navbar component</li>
                                <li>4deb8f4: Bump pnpm/action-setup from 2 to 3</li>
                                <li>9015472: Add social icons plugin</li>
                                <li>7fe30a1: <code>Dockerfile</code> fix</li>
                                <li>e53942f: Update Jekyll to version 4.3.4</li>
                                <li>72f868b: Update Tabler Icons to version 2.20 with 37 new icons added</li>
                                <li>e0443c0: Add Tabler Illustrations</li>
                                <li>5cca710: Update illustrations and enhance SVG handling in HTML</li>
                                <li>3a4f10f: Fix ids of custom size star ratings</li>
                                <li>7896562: Unify size of avatar, flag and payment components</li>
                                <li>1587905: Update icons to v2.42.0</li>
                                <li>d9e00b2: Update Bootstrap to v5.3.0</li>
                                <li>bc1d1a3: Set <code>font-size</code> of an <code>i</code> element with
                                    <code>icon</code> class in a <code>button</code> element
                                </li>
                                <li>0195f9b: Dependencies update</li>
                                <li>a5bf5d3: Fix icons in <code>form-elements.html</code></li>
                                <li>736410c: Update Tabler Icons to v3.28.1</li>
                                <li>3f516ea: Fix <code>rgba</code> color values in <code>_variables.scss</code>
                                </li>
                                <li>e91884e: Fix description of alerts with a description</li>
                                <li>90cc744: Fix colors of disabled <code>.ts-control</code></li>
                                <li>1801e41: Center content on error and single page layouts</li>
                                <li>45c83ac: Resolve map page issues</li>
                                <li>faee63c: Improve base font family loading</li>
                                <li>5e7e0dd: Introduce Docker Compose Config to build and run Ttabler locally
                                </li>
                                <li>c293a66: Fix <code>@charset</code> CSS declaration in bundle.</li>
                                <li>cb4a681: Update <code>_navbar.scss</code> with disabled dropdown menu items
                                    color</li>
                                <li>af41fb3: Update Tabler Icons to v3.17.0</li>
                                <li>6cbe888: Update <code>@tabler/icons</code> to v3.0</li>
                                <li>0e4bf5f: Refactor data structure by converting YAML files to JSON</li>
                                <li>82cf257: Increase <code>z-index</code> of <code>ts-dropdown</code> to
                                    prevent overlapping by buttons</li>
                                <li>4b4b4f6: Adding punctuation to <code>SECURITY.md</code></li>
                                <li>a0a2d52: Fix form controls bugs in dark mode</li>
                                <li>f45b697: Fix padding in code blocks</li>
                                <li>4de166d: Unified Box Shadows with Bootstrap Compatibility</li>
                                <li>87bf2f5: Remove duplicated setting of color in <code>th</code> element</li>
                                <li>5dc45aa: Fix layout of search results for small and medium screens</li>
                                <li>4ae0358: Remove <code>text-decoration</code> on hovering <code>a</code>
                                    element with class having <code>icon</code> class</li>
                                <li>e798eb6: Fix small typo in tables docs</li>
                                <li>1c1d0c9: Improve documentation for alerts</li>
                                <li>371ef84: Bump <code>pnpm/action-setup</code> from 3 to 4</li>
                                <li>8421fc2: Update dependencies</li>
                                <li>0625f5f: Update Tabler Icons to version 2.22 with 18 new icons added</li>
                                <li>ba65fc3: Update devDependencies</li>
                                <li>a43ded4: Add All Contributions package to project for easy contribution
                                    tracking</li>
                                <li>2f622c9: Set value of <code>$font-family-monospace</code> as default</li>
                                <li>2c7c448: Refactor Dockerfile and package.json</li>
                                <li>5ec7f05: Resolved light dropdown issue on dark theme</li>
                                <li>b0b07b9: Enhance documentation</li>
                                <li>0f129b1: Update Tabler Icons to version 2.19 with 18 new icons added</li>
                                <li>507df7b: Fix cells with inline icons</li>
                                <li>0e5b44a: Fix <code>color</code> of disabled <code>nav-link</code> in
                                    <code>nav-bordered</code>
                                </li>
                                <li>65c1300: Fix the <code>z-index</code> value of the <code>nav-tab</code>
                                    inside <code>card-tab</code> #1933</li>
                                <li>8552a46: Switch from <code>npm</code> to <code>pnpm</code> for faster
                                    package installation</li>
                                <li>4a9e40d: Increase contrast of active <code>dropdown-item</code> in vertical
                                    layout</li>
                                <li>17ebdf4: Update documentation for Tabler components</li>
                                <li>4c88481: Add variable to configure <code>avatar-list</code> spacing</li>
                                <li>df46ee7: Do not display empty <code>fieldset</code> element</li>
                                <li>875cafa: Refactor SCSS variables to use <code>color.adjust</code> for
                                    improved color manipulation</li>
                                <li>eb28546: Add Tabler Illustrations</li>
                                <li>650d84c: Update required Node.js version to 18 and add <code>.nvmrc</code>
                                    file</li>
                                <li>fb659d4: Fix table default background color</li>
                                <li>f77c712: Avoid SCSS color dependency on <code>:focus</code></li>
                                <li>71c68ce: Update changelog configuration and release scripts</li>
                                <li>34d124d: Update Tabler Icons to v3.26.0</li>
                                <li>4cd9215: Updated Tabler Icons to v3.24.0</li>
                                <li>7bb947b: Update Tabler Icons to version 2.18 with 18 new icons added</li>
                                <li>c75cf55: Update Node.js engine requirement to allow versions &gt;=20</li>
                                <li>1c34e8e: Update Tabler Icons to v3.14.0</li>
                                <li>289dd3b: Add Prettier to project for consistent code formatting</li>
                                <li>f83e36c: Upgrade Node.js from version 18 to version 20 for improved
                                    performance, security, and feature updates.</li>
                                <li>b885852: Update Tabler Icons to version 2.25 with 48 new icons added</li>
                                <li>53a5117: Fix responsiveness issue in Settings menu</li>
                                <li>38504e5: Added 3 new payments from Nepal: Esewa, FonePay, Khalti and Imepay
                                </li>
                                <li>35ee14d: Add new Filled section to Icons page</li>
                                <li>d32f242: Update <code>bootstrap</code> to v5.3.1</li>
                                <li>d82f94e: Update package dependencies to latest versions</li>
                                <li>54c5ad0: Fix link to webfont version of Tabler Icons</li>
                                <li>94b83d4: Add support for changeset tool for more efficient and organized
                                    code changes</li>
                                <li>c51ff28: Fix colors in date range datepicker</li>
                            </ul>
                            <h2><code>1.0.0-beta24</code> - 2025-01-11</h2>
                            <ul>
                                <li>Enhanced documentation.</li>
                                <li>Updated illustrations and improved SVG handling in HTML.</li>
                                <li>Updated copyright year in LICENSE file to 2025.</li>
                                <li>Added marketing pages plugin.</li>
                            </ul>
                            <h2><code>1.0.0-beta23</code> - 2025-01-07</h2>
                            <ul>
                                <li>Documentation improvements.</li>
                                <li>Added countup functionality and updated documentation example.</li>
                                <li>Do not display empty <code>&lt;fieldset&gt;</code>.</li>
                                <li>Set font-size of webfont icon inside a button.</li>
                                <li>Ordered menu items alphabetically.</li>
                                <li>Marked value of <code>$font-family-monospace</code> as
                                    <code>!default</code>.
                                </li>
                                <li>Fixed unpkg links to static-files icons.</li>
                                <li>Fixed description of alerts with a description.</li>
                                <li>Fixed layout of search results for small and medium screens.</li>
                                <li>Removed invalid z-index setting for dropdown.</li>
                                <li>Fixed IDs of custom size star ratings.</li>
                                <li>Removed text-decoration on hover for elements with child icons.</li>
                                <li>Fixed link to webfont icons.</li>
                                <li>Updated color reference links in UI component documentation.</li>
                                <li>Fixed typo in browser support documentation summary.</li>
                                <li>Enhanced Figma plugin documentation with detailed usage instructions.</li>
                                <li>Added documentation for Tabler Illustrations and updated index with a link.
                                </li>
                                <li>Enhanced documentation for various UI and icon sections.</li>
                                <li>Added new documentation files for icons and UI components; restructured
                                    existing files.</li>
                                <li>Updated documentation structure and content for icons and UI components.
                                </li>
                                <li>Removed outdated <code>menu.json</code> and added <code>index.mdx</code>
                                    files for UI documentation structure.</li>
                                <li>General docs update.</li>
                                <li>Increased contrast of active dropdown-item in vertical layout.</li>
                                <li>Removed duplicated color setting in table headers.</li>
                                <li>Increased <code>z-index</code> of <code>ts-dropdown</code>.</li>
                                <li>Added social icons plugin.</li>
                                <li>Described variables for datagrid in docs.</li>
                                <li>Fixed multiple documentation issues.</li>
                                <li>Removed unused config from the code.</li>
                                <li>Fixed links to Tabler Icons.</li>
                                <li>Updated dark image.</li>
                                <li>Updated screenshot.</li>
                                <li>Fixed icon issues.</li>
                                <li>Fixed URL in documentation.</li>
                            </ul>
                            <h2><code>1.0.0-beta22</code> - 2025-01-02</h2>
                            <ul>
                                <li>Fixed <code>@charset</code> CSS declaration in bundle.</li>
                                <li>Fixed cells with inline icons.</li>
                                <li>Fixed padding in code blocks.</li>
                                <li>Fixed colors in date range datepicker.</li>
                                <li>Fixed icon display issues in the Star Ratings component.</li>
                                <li>Fixed <code>z-index</code> value of the <code>nav-tab</code> inside
                                    <code>card-tab</code>.
                                </li>
                                <li>Fixed wrong gray colors.</li>
                                <li>Fixed incorrect CDN URL in <code>webfont.mdx</code>.</li>
                                <li>Ensured border color works in dark mode.</li>
                                <li>Replaced <code>.page-center</code> with <code>.my-auto</code> in single-page
                                    layouts.</li>
                                <li>Updated Tabler Emails to v2.0.</li>
                                <li>Updated Tabler Icons to v3.26.0.</li>
                                <li>Updated docs structure.</li>
                                <li>Updated <code>download.mdx</code>.</li>
                                <li>Updated Node.js to version 20.</li>
                                <li>Improved base font family.</li>
                                <li>Made horizontal rule direction-aware.</li>
                                <li>Added new payment providers.</li>
                                <li>Read changelog from <code>CHANGELOG.md</code> file.</li>
                                <li>Initialized VS Code configuration.</li>
                            </ul>
                            <h2><code>1.0.0-beta21</code> - 2024-09-8</h2>
                            <ul>
                                <li>Updated dependencies.</li>
                                <li>Updated Tabler Icons to v3.14.0 and the import script.</li>
                                <li>Fixed invisible scrollbar in dark mode when navigating the preview.</li>
                                <li>Styled <code>btn-close</code> specifically for <code>.modal-header</code>.
                                </li>
                                <li>Added proper borders to the ribbon start class.</li>
                                <li>Changed brand color.</li>
                                <li>Included <code>docs</code> in the <code>npm</code> package.</li>
                                <li>Added Tabler Illustrations.</li>
                                <li>Fixed use of the secondary color in specific form elements.</li>
                                <li>Introduced Docker Compose Config for local Tabler builds.</li>
                                <li>Allowed usage of <code>tinymce</code> v7.x as a peer dependency.</li>
                                <li>Updated TinyMCE to v7.0.</li>
                                <li>Rebranded Twitter to X.</li>
                                <li>Replaced undraw illustrations with Tabler Illustrations.</li>
                                <li>Added punctuation to <code>SECURITY.md</code>.</li>
                                <li>Updated <code>_navbar.scss</code> to correct disabled dropdown menu item
                                    colors.</li>
                                <li>Removed unused packages.</li>
                                <li>Fixed map pages.</li>
                                <li>Resolved issues with toasts in dark mode.</li>
                                <li>Fixed alert background prefix.</li>
                                <li>Corrected a typo in CHANGELOG.md.</li>
                                <li>Fixed radial chart issue.</li>
                                <li>Added documentation on running the site locally in Site README.</li>
                                <li>Updated colors in <code>colors.mdx</code>.</li>
                                <li>Fixed dynamic SCSS prefix in mixins.</li>
                                <li>Changed <code>&lt;h1&gt;</code> to <code>&lt;div&gt;</code> in
                                    <code>navbar-logo.html</code>.
                                </li>
                                <li>Resolved vertical centering on error pages.</li>
                                <li>Fixed navbar menu issues.</li>
                                <li>Added <code>background-clip: border-box</code> to
                                    <code>.dropdown-menu</code> class.
                                </li>
                                <li>Replaced <code>href=&quot;#&quot;</code> with
                                    <code>href=&quot;javascript:void(0)&quot;</code>.
                                </li>
                                <li>Fixed disabled CSS class for links.</li>
                                <li>Addressed missing variables and minor color adjustments.</li>
                                <li>Improved heights, scrolls, and layouts in Docs examples.</li>
                                <li>Fixed flags display in preview.</li>
                            </ul>
                            <h2><code>1.0.0-beta20</code> - 2023-08-24</h2>
                            <ul>
                                <li>Update <code>bootstrap</code> to v5.3.1</li>
                                <li>Add new <code>Chat</code> component</li>
                                <li>Add new <code>Tag</code> component</li>
                                <li>Add customizable Star Ratings component using <code>star-rating.js</code>
                                    library</li>
                                <li>Add new color picker component using <code>coloris.js</code> library</li>
                                <li>Add <code>alerts.html</code> page with example of alerts.</li>
                                <li>Add <code>flags.html</code> page with list of all flags</li>
                                <li>Add Two-Step Verification Pages</li>
                                <li>Add variable to configure <code>avatar-list</code> spacing</li>
                                <li>Unify dark mode with latest Bootstrap API and improve dark mode elements
                                </li>
                                <li>Unify Box Shadows with Bootstrap Compatibility</li>
                                <li>Avoid SCSS color dependency on <code>:focus</code></li>
                                <li>Update CSS class from <code>text-muted</code> to <code>text-secondary</code>
                                    for better Bootstrap compatibility</li>
                                <li>Fix text color in dark version of navbar</li>
                                <li>Adjusting form element sizes for enhanced mobile devices compatibility</li>
                                <li>Resolved light dropdown issue on dark theme</li>
                                <li>Update Tabler Icons to version 2.32 with 48 new icons added</li>
                                <li>Fix table default background color</li>
                                <li>Fix responsiveness issue in Settings menu</li>
                                <li>Update required Node.js version to 18 and add <code>.nvmrc</code> file</li>
                                <li>Add support for changeset tool for more efficient and organized code changes
                                </li>
                                <li><code>Dockerfile</code> fix</li>
                                <li>Switch from <code>npm</code> to <code>pnpm</code> for faster package
                                    installation</li>
                            </ul>
                            <h2><code>1.0.0-beta19</code> - 2023-05-15</h2>
                            <ul>
                                <li>Add customizable Star Ratings component using <code>star-rating.js</code>
                                    library (#1571)</li>
                                <li>Add new &quot;Filled&quot; section to Icons page (#1574)</li>
                                <li>Fix form controls bugs in dark mode (#1573)</li>
                                <li>Fix text color in dark version of navbar (#1569)</li>
                                <li>Changelog update</li>
                            </ul>
                            <h2><code>1.0.0-beta18</code> - 2023-05-14</h2>
                            <ul>
                                <li>new page: Cookie banner</li>
                                <li>Unify dark mode with latest Bootstrap API and improve dark mode elements
                                    (#1561)</li>
                                <li>Update Tabler Icons to version 2.18 with 18 new icons added (#1560)</li>
                                <li>Switch from <code>npm</code> to <code>pnpm</code> for faster package
                                    installation (#1559)</li>
                                <li>Add Prettier to project for consistent code formatting (#1558)</li>
                                <li>Update required Node.js version to 18 and add <code>.nvmrc</code> file
                                    (#1555)</li>
                                <li>Add All Contributions package to project for easy contribution tracking
                                    (#1556)</li>
                                <li>Add support for changeset tool for more efficient and organized code changes
                                    (#1553)</li>
                                <li>Fix bug where <code>border-1</code>, <code>border-2</code>, etc don't work
                                    (#1526)</li>
                                <li>Fix indeterminate input background color (#1536)</li>
                                <li>Update Bootstrap to <code>5.3.0-alpha3</code> (#1543)</li>
                                <li><code>tom-select</code> dark mode styling fixes</li>
                                <li>Advanced udage of <code>tom-select</code> (#1480)</li>
                                <li>Fix Dropdown menu in rtl mode (#801)</li>
                                <li>Fix <code>tom-select</code> dropdown will be shaded in table-responsive
                                    (#1409)</li>
                                <li>Remove overflow scroll from body</li>
                                <li>Fix avatars overlap transparently (#1464)</li>
                                <li>Fix TinyMCE dropdown icon list transparent (#1426)</li>
                                <li>Dark mode lite colors improvement</li>
                                <li>Fix non full width selects (#1392)</li>
                            </ul>
                            <h2><code>1.0.0-beta17</code> - 2023-01-28</h2>
                            <ul>
                                <li>update <code>bootstrap</code> to v5.3.0</li>
                                <li>update icons to v2.1.2</li>
                                <li>add 72 new brands, browsers logos update</li>
                                <li>new <code>Trial ended</code> page</li>
                                <li>new <code>Page loader</code> page</li>
                                <li>new <code>Profile</code> page</li>
                                <li>headings fix</li>
                                <li>dropdown background color fix</li>
                                <li>fix rgba conversion bug</li>
                                <li>fix autofill text color, not matching in dark mode</li>
                                <li>update license</li>
                                <li>header html5 tags</li>
                                <li>add input with appended <code>&lt;kbd&gt;</code></li>
                                <li><code>bootstrap</code> import fix</li>
                                <li>font improvements</li>
                                <li>change <code>$body-color</code> to CSS variable</li>
                                <li>scrollbars improvements</li>
                                <li>move <code>@tabler/icons</code> to <code>dev-dependencies</code></li>
                                <li>fix #1370: avatar stacked list is not stacked anymore</li>
                            </ul>
                            <h2><code>1.0.0-beta16</code> - 2022-11-12</h2>
                            <ul>
                                <li>new <code>Photogrid</code> page</li>
                                <li><code>Steps</code> component improvements</li>
                                <li>fix #1348: Make job listing responsive for smaller devices</li>
                                <li>fix #1357: buttons group not active</li>
                                <li>fix #1352: fix deprecation warning</li>
                                <li>fix #1180: number input with <code>form-control-sm</code> looks weird</li>
                                <li>fix #1328: color input should show different color for inner check symbol on
                                    white ellipse</li>
                                <li>fix #1355 - missing font sizes</li>
                                <li>update icons to v1.111.0</li>
                                <li>homepage navbar fix</li>
                                <li>fix #1262 - <code>.bg-opacity-xx</code> class is not functioning properly
                                </li>
                            </ul>
                            <h2><code>1.0.0-beta15</code> - 2022-11-01</h2>
                            <ul>
                                <li>new <code>badges</code> page</li>
                                <li><code>&lt;kbd&gt;</code> styling</li>
                                <li>update icons to v1.109.0</li>
                                <li><code>tom-select</code> border fix</li>
                                <li>exclude <code>playgrounds</code> from build</li>
                                <li>update jekyll to v4.3.1</li>
                                <li>fix: facebook color update</li>
                                <li>navbar aria atributes fixes</li>
                                <li>fix #808 - <code>navbar-menu</code> and <code>sidebar-menu</code> has the
                                    same <code>id</code></li>
                                <li>fix #1335 - missing color variables usage in <code>alert</code> and
                                    <code>btn-ghost-*</code>
                                </li>
                                <li>move border style to CSS variables</li>
                                <li>add missing forms</li>
                                <li><code>btn-actions</code> fixes</li>
                                <li>replace <code>$text-muted</code> to css variable</li>
                            </ul>
                            <h2><code>1.0.0-beta14</code> - 2022-10-21</h2>
                            <ul>
                                <li>fix active items in dark mode</li>
                                <li>update Jekyll to newest version</li>
                            </ul>
                            <h2><code>1.0.0-beta13</code> - 2022-10-18</h2>
                            <ul>
                                <li>update Bootstrap to 5.2.1, update dependencies</li>
                                <li>new <code>tracking</code> component</li>
                                <li>new radio button version of <code>form-imagecheck</code></li>
                                <li>update icons to v1.105.0</li>
                                <li>dark mode improvements</li>
                                <li>corrects the spelling of New Zealand (#1318)</li>
                                <li>remove <code>$border-color-dark</code></li>
                                <li>fix #1301 - code snippets in docs look bad in dark mode</li>
                                <li>fix #1305 - different default link color for dark mode</li>
                                <li>fix popover background in dark mode</li>
                                <li>fix button default border color</li>
                                <li>fix <code>form-imagecheck</code> bg in dark mode</li>
                                <li>navbar logo fix</li>
                                <li>move card ribbons config to variables</li>
                                <li>navbar border fix</li>
                                <li>dark mode active fix</li>
                                <li>using globalThis instead of window (#1315)</li>
                                <li>fix #1210 - lastmod not generated for pages in <code>sitemap.xml</code></li>
                                <li>fix card border in dark mode</li>
                                <li>fix #895 - background color overwrites background image</li>
                                <li>fix #1302 - wrong card header in dark mode</li>
                                <li>fix #1303 - wrong color when hovering over <code>selectgroup</code> in dark
                                    mode</li>
                                <li>fix #1308 - bad coloring in table in dark mode</li>
                                <li>fix #1273 - datepicker background color broken</li>
                                <li>fix <code>$prefix</code> hard coded <code>layout/_dark.scss</code></li>
                                <li>fix #1275 - remove last border-right on progress bar</li>
                                <li>fix #1261 - broken offcanvas bg</li>
                            </ul>
                            <h2><code>1.0.0-beta12</code> - 2022-09-19</h2>
                            <ul>
                                <li>new &quot;Job listing&quot; page</li>
                                <li>new &quot;Sign in with cover&quot; page</li>
                                <li>new &quot;Logs&quot; page</li>
                                <li>new <code>progressbg</code> component</li>
                                <li>add a lot of CSS variables</li>
                                <li>add Dockerfile with alpine base</li>
                                <li>add icon pulse/tada/rotate animations</li>
                                <li>use <code>:host</code> in selectors to support Web Components</li>
                                <li>use dark table variant colors in dark mode (#1200)</li>
                                <li>update Tabler Icons to v1.96</li>
                                <li>change <code>space-y</code> component</li>
                                <li>headings, shadows and borders unify</li>
                                <li>toggle TinyMCE dark mode and skin based on the set Tabler theme</li>
                                <li>fix <code>card-footer</code> background</li>
                                <li>fix headers weight</li>
                                <li>fix transparent hover background in pagination</li>
                                <li>fix dark mode card text color</li>
                                <li>fix <code>--#{$prefix}card-bg</code> is undefined</li>
                                <li>fix global variable for <code>.card</code> and <code>.btn</code></li>
                                <li>fix code sample in the customize tabler docs</li>
                                <li>fix form elements demo page radio buttons</li>
                                <li>replace <code>gulp-minify</code> with <code>gulp-terser</code></li>
                            </ul>
                            <h2><code>1.0.0-beta11</code> - 2022-07-05</h2>
                            <ul>
                                <li>new <code>Dropzone</code> component</li>
                                <li>new <code>Lightbox</code> component</li>
                                <li>new <code>TinyMCS</code> component</li>
                                <li>new <code>Inline Player</code> component</li>
                                <li>new <code>Pricing table</code> component</li>
                                <li>new <code>Datagrid</code> component</li>
                                <li>new optgroup form examples</li>
                                <li>new settings page</li>
                                <li>update Tabler Icons to v1.78</li>
                                <li>added popover docs page</li>
                                <li>fix: #1125 incorrect chart display in the mobile version</li>
                                <li>update Bootstrap to 5.2.0</li>
                            </ul>
                            <h2><code>1.0.0-beta10</code> - 2022-04-29</h2>
                            <ul>
                                <li>new <code>datatable</code> component</li>
                                <li>update Tabler Icons to v1.67</li>
                                <li>fix: #1024 - fix Tom-select in dark mode</li>
                                <li>new carousel indicators: dots, vertical, thumbs (#1101)</li>
                                <li>replace !important modifier with more specific selectors (#1100)</li>
                                <li>new <code>FAQ</code> page</li>
                            </ul>
                            <h2><code>1.0.0-beta9</code> - 2022-02-26</h2>
                            <ul>
                                <li>fix: #1061 - list group item colors in light and dark modes</li>
                                <li>new <code>tasks</code> dashboard</li>
                                <li>fix: #1059 - upload button in form element in dark view has problem</li>
                                <li>fix: #1052 - card background icon is practically invisible</li>
                                <li>remove Inter font and use default font system stack</li>
                                <li>fix: #1018 - vector map not working</li>
                                <li>fix: #1035 - wrong background color of hovered list group items in dark mode
                                </li>
                                <li>dependencies update</li>
                                <li>add <code>font-display: swap;</code> to improve font loading</li>
                                <li>new <code>Boxed</code> layout</li>
                            </ul>
                            <h2><code>1.0.0-beta8</code> - 2022-02-05</h2>
                            <ul>
                                <li>update dependencies</li>
                                <li>new vector maps demos</li>
                                <li>fixes update map on resize</li>
                                <li>docs improvement</li>
                                <li>replace <code>badge</code> with <code>status-dot</code> in
                                    <code>navbar-notifications.html</code>
                                </li>
                                <li>map tooltip fixes</li>
                            </ul>
                            <h2><code>1.0.0-beta7</code> - 2022-02-05</h2>
                            <ul>
                                <li>fix: #1019 - project-overview.html link not working</li>
                                <li>fix: #1010 - card with bottom tabs has incorrect border radius</li>
                                <li>uptime monitor mobile fixes</li>
                                <li>navbar dark button fix</li>
                                <li><code>tabler-icons</code> link</li>
                                <li>autoloading webfonts</li>
                                <li>cards fixes, new cards demos</li>
                                <li>ruby dependencies update</li>
                                <li>RTL stylesheet fixes</li>
                                <li>new card action demos</li>
                            </ul>
                            <h2><code>1.0.0-beta6</code> - 2022-01-18</h2>
                            <ul>
                                <li>pricing cards fix</li>
                                <li>fix bug <code>fw-...</code>, <code>.fs-...</code> is missed (#987)</li>
                                <li>avatar class fix</li>
                                <li>fix bug #903 <code>litepicker</code> with date range not having correct
                                    border</li>
                                <li>page wrapper fix</li>
                                <li>fix #900 <code>is-invalid-lite</code> class is not working under
                                    <code>was-validated</code> form class
                                </li>
                                <li>update <code>@tabler/icons</code> to version 1.48</li>
                                <li>fix #960 - Badges not honoring font sizes</li>
                                <li>fix #959 - <code>node-sass</code> does not properly compile nested media
                                    queries</li>
                                <li>update package dependencies to newest version</li>
                            </ul>
                            <h2><code>1.0.0-beta5</code> - 2021-12-07</h2>
                            <p><strong>Tabler has finally lived to see dark mode! 🌝🌚</strong></p>
                            <ul>
                                <li><strong>Dark mode enabled!</strong></li>
                                <li>add more cursors (#947)</li>
                                <li>fix #892 - media queries need to be nested when negating</li>
                                <li>update <code>@tabler/icons</code> to newest version</li>
                                <li>move optional dependencies to peerDependencies (#924)</li>
                                <li>move deployment to Github Actions (#934)</li>
                                <li>table border fixes</li>
                                <li>antialiased fix</li>
                                <li>update <code>@tabler/icons</code> to version 1.42</li>
                                <li>change default font to 'Inter'</li>
                                <li>colors unify</li>
                                <li>add <code>tom-select</code> and remove <code>choices.js</code></li>
                            </ul>
                            <h2><code>1.0.0-beta4</code> - 2021-10-24</h2>
                            <ul>
                                <li>upgrade required node.js version to 14</li>
                                <li>upgrade Bootstrap to 5.1</li>
                                <li>upgrade dependencies</li>
                                <li>fix #775 - litepicker not initializing</li>
                                <li>fix <code>nouislider</code> import in dev</li>
                            </ul>
                            <h2><code>1.0.0-beta3</code> - 2021-05-08</h2>
                            <ul>
                                <li>upgrade Bootstrap to 5.0</li>
                                <li>upgrade dependencies</li>
                                <li>change <code>$border-radius-pill</code> variable</li>
                                <li>badge vertical align fix</li>
                            </ul>
                            <h2><code>1.0.0-beta2</code> - 2021-03-29</h2>
                            <ul>
                                <li>update dependencies</li>
                                <li><code>li</code> marker fix</li>
                                <li>page wrapper, nav fixes</li>
                                <li>scripts optimize, remove <code>capture_once</code></li>
                                <li><code>page-body</code> fixes</li>
                                <li>layout navbar fix</li>
                                <li>typography fix</li>
                                <li>ribbon fix</li>
                                <li>charts label fixes</li>
                                <li>charts docs</li>
                            </ul>
                            <h2><code>1.0.0-beta</code> - 2021-02-17</h2>
                            <p><strong>Initial beta release of Tabler v1.0! Lots more coming soon though
                                    😁</strong></p>
                            <ul>
                                <li>update Bootstrap to 5.0.0-beta2</li>
                                <li>update other dependencies.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
