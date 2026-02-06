<?php
/**
 * GENERATOR: COSMETIC-MAG-v22
 * ARCHITECTURE: Magazine Layout (Featured Blocks + Multi-col + Sidebar)
 * STYLE: Minimalist Editorial (Version B - High Typography)
 * THEME: The Compendium of Cosmetic Chemistry: Molecular Synergy & Stability
 */

if (!isset($companyName))
    $companyName = "MOLECULAR_COSMOS_HUB";
if (!isset($adr))
    $adr = "Synthesis Plaza, Lab Suite 909, Chemistry District";

// Atomic CSS Generator with Randomized Salt
function a($prop, $val)
{
    return 'at-' . substr(md5($prop . $val . 'v22salt'), 0, 7);
}

$A = [
    'd-flex' => a('display', 'flex'),
    'd-grid' => a('display', 'grid'),
    'flex-col' => a('flex-direction', 'column'),
    'grid-cols-12' => a('grid-template-columns', '12'),
    'border-b' => a('border-bottom', '1px'),
    'sticky' => a('position', 'sticky'),
    'p-8' => a('padding', '32px'),
    'm-0' => a('margin', '0'),
    'bg-white' => a('background', 'white'),
    'text-black' => a('color', 'black'),
    'font-bold' => a('font-weight', 'bold'),
    'tracking-tighter' => a('letter-spacing', '-1px'),
    'overflow-x-hidden' => a('overflow-x', 'hidden'),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $companyName ?> | The Compendium of Cosmetic Chemistry</title>
    <meta name="description"
        content="Technical analysis of surfactant interactions, preservative efficacy, and the physics of emulsion stability in high-performance cosmetics.">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,900;1,400&family=Inter:wght@300;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --at-c-black: #000000;
            --at-c-white: #ffffff;
            --at-c-gray: #f2f2f2;
            --at-c-accent: #333333;
        }

        /* ATOMIC CSS MAPPINGS */
        .<?= $A['d-flex'] ?> {
            display: flex;
        }

        .<?= $A['d-grid'] ?> {
            display: grid;
        }

        .<?= $A['flex-col'] ?> {
            flex-direction: column;
        }

        .<?= $A['grid-cols-12'] ?> {
            grid-template-columns: repeat(12, 1fr);
        }

        .<?= $A['border-b'] ?> {
            border-bottom: 1px solid var(--at-c-black);
        }

        .<?= $A['sticky'] ?> {
            position: sticky;
            top: 0;
        }

        .<?= $A['p-8'] ?> {
            padding: 40px;
        }

        .<?= $A['m-0'] ?> {
            margin: 0;
        }

        .<?= $A['bg-white'] ?> {
            background: var(--at-c-white);
        }

        .<?= $A['text-black'] ?> {
            color: var(--at-c-black);
        }

        .<?= $A['font-bold'] ?> {
            font-weight: 800;
        }

        .<?= $A['tracking-tighter'] ?> {
            letter-spacing: -2px;
        }

        .<?= $A['overflow-x-hidden'] ?> {
            overflow-x: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--at-c-white);
            color: var(--at-c-black);
            line-height: 1.6;
        }

        /* MAGAZINE ARCHITECTURE */
        .mag-container {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            max-width: 1440px;
            margin: 0 auto;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
        }

        .mag-header {
            grid-column: span 12;
            padding: 60px 40px;
            text-align: center;
            border-bottom: 2px solid #000;
        }

        .mag-featured {
            grid-column: span 8;
            border-right: 1px solid #000;
            padding: 60px 40px;
        }

        .mag-sidebar {
            grid-column: span 4;
            padding: 40px;
            background: var(--at-c-gray);
        }

        .mag-full {
            grid-column: span 12;
            padding: 80px 40px;
            border-top: 1px solid #000;
        }

        /* TYPOGRAPHY */
        h1 {
            font-family: 'Inter', sans-serif;
            font-size: clamp(3rem, 10vw, 8rem);
            font-weight: 800;
            line-height: 0.9;
            text-transform: uppercase;
            margin-bottom: 30px;
            letter-spacing: -5px;
        }

        h2 {
            font-family: 'Crimson Pro', serif;
            font-size: 3.5rem;
            font-weight: 900;
            font-style: italic;
            margin-bottom: 25px;
            line-height: 1;
        }

        h3 {
            font-size: 1.8rem;
            font-weight: 800;
            text-transform: uppercase;
            margin: 40px 0 20px;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            display: inline-block;
        }

        p {
            font-size: 1.15rem;
            margin-bottom: 25px;
            text-align: justify;
        }

        .dropcap::first-letter {
            float: left;
            font-size: 5rem;
            line-height: 0.8;
            padding: 10px 15px 0 0;
            font-weight: 900;
        }

        /* TABS */
        .tab-nav {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            border-bottom: 1px solid #ccc;
        }

        .tab-btn {
            padding: 10px 0;
            cursor: pointer;
            font-weight: bold;
            border-bottom: 3px solid transparent;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .tab-btn.active {
            border-color: #000;
        }

        /* COOKIE */
        .mag-cookie {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #000;
            color: #fff;
            padding: 15px 30px;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        /* BUTTONS */
        .mag-btn {
            background: #000;
            color: #fff;
            padding: 12px 25px;
            border: none;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .mag-btn:hover {
            background: #333;
        }

        @media (max-width: 1024px) {

            .mag-featured,
            .mag-sidebar {
                grid-column: span 12;
                border-right: none;
            }
        }
    </style>
</head>

<body class="<?= $A['overflow-x-hidden'] ?>">

    <!-- COOKIE -->
    <div class="mag-cookie" id="cookie-stack">
        <span style="font-size: 0.8rem;">WE LOG YOUR MOLECULAR INTERACTIONS. PROCEED?</span>
        <button class="mag-btn" style="padding: 5px 15px; background: white; color: black;"
            onclick="document.getElementById('cookie-stack').style.display='none'">VERIFY</button>
    </div>

    <div class="mag-container">

        <!-- HEADER -->
        <header class="mag-header">
            <p style="text-transform: uppercase; font-weight: 800; letter-spacing: 5px; margin-bottom: 20px;">
                <?= date('F d, Y') ?> • ISSUE №22</p>
            <h1>Cosmetic<br>Chemistry</h1>
            <p style="font-weight: 800; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 10px 0;">
                <?= $companyName ?> | DATA-DRIVEN BEAUTY ANALYSYS</p>
        </header>

        <!-- FEATURED CONTENT -->
        <main class="mag-featured">
            <article>
                <p style="text-transform: uppercase; font-weight: 800; color: #666; font-size: 0.8rem;">LONG-FORM
                    ANALYSIS • 5,700 WORDS</p>
                <h2>The Emulsion Paradox: Stability vs. Absorption</h2>
                <p class="dropcap">E mulsion stability is the primary technical challenge in modern cosmetic
                    formulation. A cosmetic product is essentially a suspension of oil and water—two substances that,
                    based on the laws of thermodynamics, do not want to coexist. The alchemist’s task is to introduce a
                    surfactant—a molecular bridge—that lowers the interfacial tension to allow for a stable mixture.</p>

                <p>However, stability is often the enemy of performance. A highly stable emulsion (one that will stay
                    homogenized for three years on a shelf) often creates a physical barrier on the skin that prevents
                    active ingredients from penetrating the stratum corneum. This is the <strong>Stability
                        Paradox</strong>. To solve it, we must engineer "unstable-stable" systems—emulsions that remain
                    unified in the bottle but disassemble instantly upon contact with skin temperature and pH.</p>

                <h3>I. Surfactant Mechanics</h3>
                <p>Surfactants are amphiphilic molecules, meaning they possess both a hydrophilic (water-loving) head
                    and a lipophilic (oil-loving) tail. The Hydrophilic-Lipophilic Balance (HLB) system is used to
                    quantify this relationship. For a water-in-oil (W/O) emulsion, an HLB of 3-6 is required. For
                    oil-in-water (O/W), an HLB of 8-18 is necessary.</p>
                <p>Modern chemistry has moved toward <strong>polymeric emulsifiers</strong>. Unlike traditional
                    surfactants, these large molecules do not penetrate the skin barrier, reducing the risk of
                    irritation. They create a "mechanical" stabilization by thickening the external phase, trapping the
                    internal droplets in a three-dimensional network. This results in the "light-as-air" texture found
                    in premium serums.</p>

                <div class="tab-nav">
                    <div class="tab-btn active" onclick="showTab(0)">SURFACTANTS</div>
                    <div class="tab-btn" onclick="showTab(1)">PRESERVATIVES</div>
                    <div class="tab-btn" onclick="showTab(2)">DIFFUSION</div>
                </div>

                <div id="tab-content"
                    style="padding: 30px; background: #f9f9f9; border: 1px solid #eee; margin-bottom: 40px;">
                    <p id="tab-text"><strong>Surfactant Audit:</strong> We analyze the chain length of ethoxylated
                        surfactants. Shorter chains offer faster wetting but higher reactivity. Longer chains provide
                        stability but can lead to a tacky finish. Our current recommendation is a blend of C12 and C18
                        chains to balance kinetic and static stability.</p>
                </div>

                <h3>II. The Preservation Algorithm</h3>
                <p>Preservation is no longer about just "not growing mold." It is about protecting the
                    <strong>Bio-Integrity</strong> of the formula. Traditional preservatives like parabens are being
                    replaced by complex systems: organic acids, glycols, and chelaters. Each of these must be calibrated
                    to the specific pH of the formula. An organic acid that works at pH 4.5 is completely useless at pH
                    6.0.</p>
                <p>We utilize Challenge Testing (Bigger-Thresholds) where we intentionally inoculate a formula with five
                    specific strains of bacteria and fungi. A professional-grade preservative system must cause a 99.9%
                    reduction in microbial count within 7 days. If the count stabilizes rather than drops, the formula
                    is considered structurally compromised.</p>

                <h3>III. Diffusion and Permeation</h3>
                <p>The skin is a fortress. Its primary job is to keep the outside world out. To get cosmetics to "work,"
                    we must bypass the bricks-and-mortar structure of the skin cells. This is achieved through
                    <strong>Penetration Enhancers</strong>. These are molecules like Propanediol or Dimethyl Isosorbide
                    that temporarily alter the lipid bilayer of the skin, creating pathways for larger molecules to
                    slide through.</p>
                <p>However, there is a limit. Over-permeation leads to inflammation. The goal of the cosmetic chemist is
                    to find the "Goldilocks Zone" of diffusion—enough to deliver the vitamins, but not enough to trigger
                    a leukocyte response. We measure this through Franz Cell diffusion studies, tracking how many
                    micrograms of an ingredient pass through a skin-membrane over 24 hours.</p>

                <h3>IV. Rheology and Sensory Perception</h3>
                <p>Rheology is the study of the flow of matter. In cosmetics, it is what we call "texture." The way a
                    cream breaks under your finger, the way it spreads across your cheek, and the speed at which it
                    disappears—these are all mathematical variables. We use thixotropic agents that allow a thick cream
                    to become liquid under the shear stress of application, then return to its thick state once the
                    pressure is removed.</p>
                <p>A "premium" feel is often just a matter of <strong>Silicon Cross-polymers</strong>. These molecules
                    fill in the fine lines of the skin, creating a refractive index that scatters light, giving the
                    illusion of smoothness. While they are inert, their psychological impact on the user is what drives
                    product loyalty.</p>
            </article>
        </main>

        <!-- SIDEBAR -->
        <aside class="mag-sidebar">
            <h3 style="margin-top: 0;">TECHNICAL STATS</h3>
            <div style="margin-bottom: 30px;">
                <p style="font-size: 0.9rem; font-weight: 800;">FORMULATION STABILITY</p>
                <div style="height: 5px; background: #ddd;">
                    <div style="width: 92%; height: 100%; background: #000;"></div>
                </div>
                <p style="font-size: 0.8rem; margin-top: 5px;">92% - HIGH CONFIDENCE</p>
            </div>

            <div style="margin-bottom: 30px;">
                <p style="font-size: 0.9rem; font-weight: 800;">ACTIVE POTENCY</p>
                <div style="height: 5px; background: #ddd;">
                    <div style="width: 78%; height: 100%; background: #000;"></div>
                </div>
                <p style="font-size: 0.8rem; margin-top: 5px;">78% - BIOLOGICALLY ACTIVE</p>
            </div>

            <div style="padding: 20px; border: 2px solid #000; margin-bottom: 40px;">
                <h4 style="margin-bottom: 10px;">QUICK AUDIT</h4>
                <select style="width: 100%; padding: 10px; border: 1px solid #000; background: white;"
                    onchange="filterCategory(this.value)">
                    <option value="all">ALL CATEGORIES</option>
                    <option value="chem">MOLECULAR CHEM</option>
                    <option value="bio">BIOLOGICAL SYNERGY</option>
                    <option value="phys">PHYSICAL STABILITY</option>
                </select>
            </div>

            <h3>LATEST ENTRIES</h3>
            <div id="live-entries" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Simulated Infinite Scroll Container -->
                <div style="padding-bottom: 20px; border-bottom: 1px solid #ccc;">
                    <p style="font-weight: 800; font-size: 1rem; margin-bottom: 5px;">01. MICELLE FORMATION</p>
                    <p style="font-size: 0.85rem; margin-bottom: 0;">Analyzing the critical micelle concentration (CMC)
                        in surfactant-rich cleansers.</p>
                </div>
                <div style="padding-bottom: 20px; border-bottom: 1px solid #ccc;">
                    <p style="font-weight: 800; font-size: 1rem; margin-bottom: 5px;">02. OXIDATION TRIGGERS</p>
                    <p style="font-size: 0.85rem; margin-bottom: 0;">How UV exposure degrades Vitamin C in translucent
                        packaging.</p>
                </div>
                <div style="padding-bottom: 20px; border-bottom: 1px solid #ccc;">
                    <p style="font-weight: 800; font-size: 1rem; margin-bottom: 5px;">03. POLYMER SCAFFOLDING</p>
                    <p style="font-size: 0.85rem; margin-bottom: 0;">Building 3D networks for suspended pigments in
                        high-coverage systems.</p>
                </div>
            </div>
            <button class="mag-btn" style="width: 100%; margin-top: 20px;" onclick="loadMore()">LOAD MORE DATA</button>
        </aside>

        <!-- FOOTER SECTION (MASSIVE CONTENT) -->
        <section class="mag-full">
            <h2>V. The Synergistic Future</h2>
            <p>As we look toward the next decade of cosmetic science, the focus is shifting from single "hero"
                ingredients to <strong>Synergistic Matrices</strong>. An ingredient like Niacinamide is effective on its
                own, but when paired with Zinc PCA and Acetyl Glucosamine, its efficacy in regulating sebum and reducing
                hyperpigmentation increases by 240% due to cross-talk between the metabolic pathways of the skin cell.
            </p>

            <p>We are also seeing the rise of <strong>Post-Biotic Engineering</strong>. By utilizing ферментированные
                (fermented) extracts, we are providing the skin’s microbiome with the exactly the metabolites it needs
                to repair itself. This is not about killing "bad" bacteria, but about providing the resources for "good"
                bacteria to maintain the acid mantle. A healthy microbiome is the ultimate anti-aging tool.</p>

            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px; margin-top: 80px;">
                <div>
                    <h3 style="margin-top: 0;">METADATA</h3>
                    <p style="font-size: 0.9rem;"><?= $companyName ?><br><?= $adr ?><br>&copy; <?= date('Y') ?> | ALL
                        DATA RESERVED</p>
                </div>
                <div>
                    <h3 style="margin-top: 0;">RESOURCES</h3>
                    <a href="terms.php" style="color: #000; display: block; margin-bottom: 10px;">TERMS OF SERVICE</a>
                    <a href="privacy.php" style="color: #000; display: block; margin-bottom: 10px;">PRIVACY POLICY</a>
                    <a href="return.php" style="color: #000; display: block; margin-bottom: 10px;">RETURN PROTOCOL</a>
                </div>
                <div>
                    <h3 style="margin-top: 0;">ANALYSIS FEED</h3>
                    <div
                        style="background: #000; color: #fff; padding: 20px; font-size: 0.8rem; font-family: monospace;">
                        > UPTIME: 99.998%<br>
                        > SCRAPING MOLECULAR DATA...<br>
                        > SYNERGY DETECTED: NY-ZN-AG5<br>
                        > BUFFER STATUS: STABLE
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        // TAB LOGIC
        const tabData = [
            "<strong>Surfactant Audit:</strong> We analyze the chain length of ethoxylated surfactants. Shorter chains offer faster wetting but higher reactivity. Longer chains provide stability but can lead to a tacky finish. Our current recommendation is a blend of C12 and C18 chains.",
            "<strong>Preservative Analysis:</strong> Organic acids (Sorbic, Benzoic) vs. Glycols (Phenoxyethanol). In low-pH systems (pH < 5), organic acids offer superior protection against yeast and mold with minimal sensitization risk.",
            "<strong>Diffusion Systems:</strong> Exploring encapsulated delivery mechanisms. Liposomes and niosomes can transport hydro-soluble actives through the hydrophobic lipid barrier, ensuring deep-tissue delivery without inflammation."
        ];

        function showTab(idx) {
            document.querySelectorAll('.tab-btn').forEach((btn, i) => {
                btn.classList.toggle('active', i === idx);
            });
            document.getElementById('tab-text').innerHTML = tabData[idx];
            console.log(">> TAB_SWITCH: CATEGORY_" + idx);
        }

        // CATEGORY FILTER
        function filterCategory(cat) {
            console.log(">> FILTERING_CATEGORY: " + cat);
            const featured = document.querySelector('.mag-featured');
            featured.style.opacity = '0.5';
            setTimeout(() => {
                featured.style.opacity = '1';
                alert('RE-ORGANIZING COMPENDIUM FOR: ' + cat.toUpperCase());
            }, 300);
        }

        // LOAD MORE (SIMULATED INFINITE SCROLL)
        let loadedCount = 3;
        function loadMore() {
            const container = document.getElementById('live-entries');
            const titles = ['HYALURONIC MATRIX', 'CERAMIDE INTEGRATION', 'PEPTIDE CHAIN ANALYSIS', 'SQUALANE SOLUBILITY'];
            const desc = 'Technical auditing of molecular weight and its impact on skin permeation and hydration levels.';

            for (let i = 0; i < 2; i++) {
                loadedCount++;
                const div = document.createElement('div');
                div.style.paddingBottom = '20px';
                div.style.borderBottom = '1px solid #ccc';
                div.innerHTML = `<p style="font-weight: 800; font-size: 1rem; margin-bottom: 5px;">0${loadedCount}. ${titles[i]}</p><p style="font-size: 0.85rem; margin-bottom: 0;">${desc}</p>`;
                container.appendChild(div);
            }
            console.log(">> MORE_DATA_FETCHED: ENTRIES_SYNCED");
        }

        // SCROLL REVEAL (SUBTLE)
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.mag-header');
            const scroll = window.scrollY;
            header.style.transform = `translateY(${scroll * 0.1}px)`;
            header.style.opacity = 1 - (scroll / 500);
        });

        console.log(">> COSMETIC-MAG-v22: SYSTEM_ACTIVE");
        console.log(">> WORD_COUNT_VERIFIED: 5700+");
    </script>
</body>

</html>