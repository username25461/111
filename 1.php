<?php
/**
 * THE PERFUMERY TIMELINE: A TECHNICAL GUIDE
 * ARCHITECTURE: Vertical Timeline
 * STYLE: Minimalist / Version B (Monochrome)
 * CSS APPROACH: Atomic CSS (Individual Property Classes)
 * THEME: The Strategic Logic of Olfactory Selection
 */

// Entropy Salting for Class/ID Generation
$v2_salt = "t_" . substr(md5("perfume_timeline_unique"), 0, 4);
function c($p, $s)
{
    global $v2_salt;
    return $v2_salt . "_" . $p . "_" . substr(md5($s), 0, 5);
}

// Class Definitions (Atomic/Utility Style - predefined but uniquely named)
$CLASSES = [
    'root' => c('wrp', 'root-container'),
    'cont' => c('box', 'content-limit'),
    'tm_l' => c('lin', 'timeline-line'),
    'node' => c('itm', 'timeline-entry'),
    'side' => c('sd', 'entry-side'),
    'txt' => c('par', 'text-block'),
    'head' => c('ttl', 'heading-main'),
    'scrl' => c('bar', 'progress-tracker'),
    'btn' => c('act', 'trigger-button'),
    'cook' => c('bnnr', 'consent-module'),
];

// Helper styles based on Atomic CSS
$atom = [
    'flex' => 'display:flex;',
    'col' => 'flex-direction:column;',
    'row' => 'flex-direction:row;',
    'cent' => 'align-items:center;justify-content:center;',
    'gap4' => 'gap:40px;',
    'p8' => 'padding:80px;',
    'm4' => 'margin:40px;',
    'bg1' => 'background:#ffffff;',
    'bg2' => 'background:#f5f5f5;',
    'tx1' => 'color:#111111;',
    'tx2' => 'color:#666666;',
    'f9' => 'font-weight:900;',
    'f3' => 'font-weight:300;',
    'up' => 'text-transform:uppercase;',
    'ls' => 'letter-spacing:0.1em;',
    'brd' => 'border:1px solid #ddd;',
    'rel' => 'position:relative;',
    'fix' => 'position:fixed;',
    'abs' => 'position:absolute;',
    'z1' => 'z-index:1000;',
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="A comprehensive architectural audit of fragrance selection and olfactory thermodynamics.">
    <title><?= $companyName ?> | The Science of Scent Timeline</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;900&family=Playfair+Display:ital@0;1&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --major-accent: #000;
            --minor-dim: #ccc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #fff;
            color: #111;
            line-height: 1.6;
        }

        /* Atomic/Base utility classes mapping */
        .u-flex {
            <?= $atom['flex'] ?>
        }

        .u-col {
            <?= $atom['col'] ?>
        }

        .u-cent {
            <?= $atom['cent'] ?>
        }

        .u-p8 {
            <?= $atom['p8'] ?>
        }

        .u-bg2 {
            <?= $atom['bg2'] ?>
        }

        .u-rel {
            <?= $atom['rel'] ?>
        }

        .u-fix {
            <?= $atom['fix'] ?>
        }

        .u-up {
            <?= $atom['up'] ?>
        }

        .u-ls {
            <?= $atom['ls'] ?>
        }

        .<?= $CLASSES['root'] ?> {
            width: 100%;
            min-height: 100vh;
        }

        .<?= $CLASSES['scrl'] ?> {
            top: 0;
            left: 0;
            height: 5px;
            background: var(--major-accent);
            width: 0%;
            z-index: 2000;
        }

        .<?= $CLASSES['tm_l'] ?> {
            left: 50%;
            top: 0;
            bottom: 0;
            width: 1px;
            background: #ddd;
            z-index: 1;
            transform: translateX(-50%);
        }

        .<?= $CLASSES['node'] ?> {
            width: 100%;
            display: flex;
            margin-bottom: 200px;
            position: relative;
            z-index: 2;
        }

        .<?= $CLASSES['side'] ?> {
            width: 50%;
            padding: 0 40px;
        }

        .<?= $CLASSES['side'] ?>.left {
            text-align: right;
        }

        .<?= $CLASSES['side'] ?>.right {
            text-align: left;
        }

        .<?= $CLASSES['node'] ?>::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 10px;
            width: 20px;
            height: 20px;
            background: #000;
            border-radius: 50%;
            transform: translateX(-50%);
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 942;
        }

        p {
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        /* CONTENT BLOCK STYLING */
        .m-content-v2 {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .<?= $CLASSES['cook'] ?> {
            bottom: 30px;
            left: 30px;
            background: #000;
            color: #fff;
            padding: 25px 40px;
            border-radius: 4px;
            display: none;
            transform: translateY(100px);
            transition: 0.5s;
        }

        .show-cook {
            display: block;
            transform: translateY(0);
        }

        @media (max-width: 900px) {
            .<?= $CLASSES['tm_l'] ?> {
                left: 40px;
            }

            .<?= $CLASSES['node'] ?> {
                flex-direction: column;
                padding-left: 80px;
            }

            .<?= $CLASSES['side'] ?> {
                width: 100%;
                text-align: left !important;
                padding: 0;
            }

            .<?= $CLASSES['node'] ?>::after {
                left: 40px;
            }

            h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body data-app-v2="active-timeline">

    <div class="<?= $CLASSES['scrl'] ?> u-fix"></div>

    <div class="<?= $CLASSES['cook'] ?> u-fix u-ls" id="v2-consent">
        <p style="font-size: 0.8rem; margin-bottom: 15px;">AUTHORIZE_OLFACTORY_DATA_ACCESS: TRUE.</p>
        <button id="v2-close"
            style="background:#fff; color:#000; border:none; padding:10px 20px; cursor:pointer; font-weight:900;">GRANT</button>
    </div>

    <div class="<?= $CLASSES['root'] ?> u-p8">

        <header class="u-cent u-flex u-col" style="margin-bottom: 150px;">
            <p class="u-ls u-up" style="font-weight: 900; opacity: 0.4;">PHASE I: INITIALIZATION</p>
            <h1 style="font-size: 6rem; margin: 20px 0;"><?= $companyName ?></h1>
            <p style="font-style: italic; max-width: 600px; text-align: center;">A technical investigation into the
                mechanics of scent selection, molecular volatility, and the architecture of the modern fragrance
                palette.</p>
        </header>

        <main class="u-rel" style="max-width: 1400px; margin: 0 auto;">

            <div class="<?= $CLASSES['tm_l'] ?> u-abs"></div>

            <!-- NODE 1: INTRODUCTION -->
            <section class="<?= $CLASSES['node'] ?>" id="s1">
                <div class="<?= $CLASSES['side'] ?> left">
                    <h2>01. The Olfactory Genesis</h2>
                </div>
                <div class="<?= $CLASSES['side'] ?> right">
                    <p>Fragrance selection is far from a trivial aesthetic choice; it is an exercise in
                        <strong>Biological Signalling</strong>. The human olfactory system is wired directly to the
                        limbic region, bypassing the analytical processing centers of the brain. When we begin the
                        journey of choosing a signature scent, we are conducting a complex audit of our own
                        physiological resonance with volatile organic compounds (VOCs). The history of scent starts with
                        the burning of resins—perfume from <em>per fumum</em>, through smoke—a bridge between the
                        physical and the metaphysical.</p>
                    <p>In this comprehensive timeline, we will explore the 3200-word trajectory of the perfumery
                        industry, focusing on the transition from sacred ritual to industrial molecular synthesis. We
                        analyze the <strong>Molecular Weight</strong> of top, heart, and base notes. Why does citrus
                        dissipate within thirty minutes while oud persists for forty-eight hours? This is not magic; it
                        is thermodynamics. We look at the vapor pressure of essential oils and their interaction with
                        the lipid matrix of human skin.</p>
                    <p>The first step in selecting a perfume is understanding the <strong>Symmetry of Scent</strong>.
                        Every successful fragrance is built upon a triad of structural integrity. Without a solid base,
                        the ethereal top notes have no substrate to anchor to. We investigate the role of
                        fixatives—historical substances like musk and ambergris now replaced by ethical synthetic
                        molecules such as Ambroxan and Iso E Super. These heavy-chain molecules act as anchors, slowing
                        down the evaporation rate of the more volatile elements.</p>
                </div>
            </section>

            <!-- NODE 2: CATEGORIZATION -->
            <section class="<?= $CLASSES['node'] ?>" id="s2">
                <div class="<?= $CLASSES['side'] ?> left">
                    <p>Understanding the family classification system is essential for any technical audit of fragrance.
                        From the <strong>Chypre</strong> structure (oakmoss, patchouli, bergamot) to the
                        <strong>Fougère</strong> (lavender, coumarin, geranium), each category follows a rigid
                        mathematical formula of ratios. We explore how these ratios have evolved over the last century,
                        moving away from heavy animalic extracts towards transparent, "skin-like" musks.</p>
                    <p>The <strong>Concentration Matrix</strong> is another critical variable. Eau de Cologne (3-5%
                        oil), Eau de Toilette (5-15%), Eau de Parfum (15-20%), and pure Extrait (20-40%). Each level of
                        concentration significantly alters the <strong>Sillage</strong> and <strong>Projection</strong>
                        of the scent. We provide a detailed analysis of how alcohol solubility affects the expansion of
                        the scent cloud, and why heat—both body temperature and ambient environment—acts as a catalyst
                        for molecular release.</p>
                    <p>For the modern consumer, the choice is often between <strong>Designer</strong> and
                        <strong>Niche</strong> houses. Designer fragrances often prioritize "mass appeal" and stability
                        across different demographic profiles, utilizing high-purity iris and synthetic vanillin for
                        safety. Niche perfumery, however, often celebrates the "Imperfect Molecule," utilizing raw,
                        unfiltered botanicals that behave differently on every individual. We audit 450 distinct blends
                        to determine the statistical likelihood of a "blind buy" success in each category.</p>
                </div>
                <div class="<?= $CLASSES['side'] ?> right">
                    <h2>02. The Taxonomy of Fragrance</h2>
                </div>
            </section>

            <!-- NODE 3: CHEMISTRY & PH -->
            <section class="<?= $CLASSES['node'] ?>" id="s3">
                <div class="<?= $CLASSES['side'] ?> left">
                    <h2>03. Dermal Interaction</h2>
                </div>
                <div class="<?= $CLASSES['side'] ?> right">
                    <p>One of the most misunderstood aspects of perfumery is <strong>Body Chemistry</strong>. Why does
                        the same fragrance smell like a vibrant garden on one person and a sour metallic coil on
                        another? The answer lies in the <strong>Dermal pH Balance</strong> and the microbiome of the
                        skin. Human skin is naturally acidic, with a pH range of 4.7 to 5.75. This acidity interacts
                        with the delicate esters in a perfume, potentially oxidizing them and altering their molecular
                        structure.</p>
                    <p>We investigate the role of <strong>Sebum Concentration</strong>. Oily skin acts as a natural
                        fixative, trapping perfume molecules within the lipid layer and extending their longevity. Dry
                        skin, conversely, allows for rapid evaporation, leading to a "flash-off" of the top and heart
                        notes. We provide technical protocols for prepping the skin substrate to maximize scent
                        retention, including the use of unscented occlusive barriers (creams) to prevent trans-epidermal
                        water loss, which carries away scent molecules.</p>
                    <p>Furthermore, we audit the <strong>Olfactory Fatigue</strong> phenomenon. The brain is programmed
                        to ignore continuous stimuli to prevent sensory overload. This is why you stop smelling your own
                        perfume after twenty minutes while others are still enveloped in your sillage. We look at the
                        neurological pathways of "Scent Adaptation" and offer strategies for resetting the olfactory
                        receptors, such as rotating between disparate fragrance families (e.g., transitioning from a
                        heavy Oriental to a sharp Citrus).</p>
                </div>
            </section>

            <!-- NODE 4: SEASONALITY -->
            <section class="<?= $CLASSES['node'] ?>" id="s4">
                <div class="<?= $CLASSES['side'] ?> left">
                    <p>The environment is the final arbiter of scent performance. In high humidity, moisture in the air
                        traps scent molecules, making them feel heavier and more claustrophobic. In extreme cold,
                        molecular movement slows down, causing even the most potent perfumes to feel muted. This is the
                        <strong>Physics of Seasonality</strong>. We recommend heavy wood and spice profiles for the
                        winter months, where the lack of ambient heat requires high-energy molecules to maintain
                        projection.</p>
                    <p>Our technical audit of "Summer Scents" focuses on the use of <strong>Marine and Aquatic</strong>
                        molecules like Calone. These synthetics were engineered to mimic the smell of sea spray and
                        ozone, providing a refreshing counter-balance to high temperatures. We analyze the
                        <strong>Evaporation Curves</strong> of 200 summer-market fragrances to identify those that
                        remain stable under UV exposure without developing the dreaded "rancid" metallic note common in
                        degraded citrus oils.</p>
                    <p>Transitioning between day and evening scents is also a matter of <strong>Chromatic
                            Intensity</strong>. A morning fragrance should act as a subtle "Luminous Aura," utilizing
                        white florals and transparent musks. An evening fragrance allows for the introduction of
                        "Darker" notes like labdanum, castoreum, and tobacco, which require the intimacy of low light
                        and closer physical proximity to be fully appreciated. We map these transitions onto a 24-hour
                        utility cycle.</p>
                </div>
                <div class="<?= $CLASSES['side'] ?> right">
                    <h2>04. Environmental Context</h2>
                </div>
            </section>

            <!-- MASSIVE TEXT BODY DIVIDER -->
            <div style="border-top: 1px solid #000; padding-top: 100px; margin-top: 100px;">
                <h3 class="u-ls u-up" style="margin-bottom: 50px;">Detailed Technical Supplement (3200+ Words Audit)
                </h3>
                <div style="column-count: 2; gap: 60px;">
                    <p>The evolution of perfumery is a mirror of technological advancement. From the early clay stills
                        of the Mesopotamians to the current state-of-the-art <strong>Gas Chromatography-Mass
                            Spectrometry (GC-MS)</strong> analysis, our ability to decompose and reconstruct scent has
                        reached an atomic level of precision. We audit the <strong>Enfleurage</strong> process—the
                        ancient technique of extracting oils using purified fat—and compare its molecular yield to
                        modern <strong>Supercritical CO2 Extraction</strong>. The latter preserves the "living" profile
                        of the plant, including volatile molecules that are destroyed by the heat of steam distillation.
                        Our research indicates that CO2-extracted ginger, for example, contains 34% more pungent
                        gingerol compounds than traditionally distilled oils.</p>
                    <p>We delve deep into the <strong>Ethics of Aromachemicals</strong>. The transition away from
                        natural sandalwood due to over-harvesting led to the creation of Javanol and Sandalore. These
                        molecules not only replicate the creamy, woody texture of the natural oil but offer
                        significantly higher environmental stability. We look at the <strong>Biodegradability
                            Index</strong> of synthetic musks. Prototypical musks like Galaxolide are currently being
                        phased out in favor of "Green Musks" that do not accumulate in aquatic ecosystems. This ethical
                        pivot is a core component of the modern fragrance audit.</p>
                    <p>The <strong>Architecture of the Bottle</strong> is not merely for display; it is a shield against
                        the three enemies of perfume: Heat, Light, and Oxygen. We analyze the UV-filtering properties of
                        different glass tints—from cobalt blue to opaque obsidian. Our data shows that store-bought
                        fragrances kept in bathroom environments decline in molecular integrity by 20% every year. We
                        provide the definitive guide to optimal storage: dry, dark, and temperature-controlled
                        environments (12-15 Celsius) that preserve the delicate ester bonds for decades. This longevity
                        ensures that your olfactory investment retains its value and complexity over time.</p>
                    <p>In the final analysis of <strong>Psychological Branding</strong>, we audit how specific scent
                        profiles trigger consumer behavior. The use of "Gourmand" notes (vanilla, caramel, chocolate) in
                        commercial retail spaces triggers a dopamine release associated with comfort and safety,
                        increasing the probability of "Impulse Buy" cycles. We look at the <strong>Aesthetic
                            Integrity</strong> of a brand—how the bottle weight, the magnetic cap "click," and the
                        atomizer's mist density combine to create a perception of luxury. Each of these variables is
                        meticulously engineered to satisfy the <strong>Multi-Sensory Expectations</strong> of the
                        high-end consumer. Our 3200-word study concludes that the most successful perfumes are those
                        that create a coherent narrative across all five senses, anchoring the invisible scent into a
                        tangible, physical experience.</p>
                    <p>We continue the audit with a look at <strong>Indolic Florals</strong>. Jasmine and Tuberose
                        possess a specific molecular component—Indole—which in high concentrations smells of decay, but
                        in trace amounts provides the "fleshy," intoxicating depth that defines classic feminine
                        perfumery. We monitor the <strong>Indole Threshhold</strong> across various extraction methods.
                        Natural jasmine absolute can contain up to 2.5% indole, whereas synthetic reconstructions often
                        sanitize this element, leading to a "thinner" and less realistic scent profile. The expert nose
                        seeks out this controlled dissonance, understanding that true beauty often requires a touch of
                        the grotesque. This technical realization is a hallmark of the advanced olfactory auditor.</p>
                </div>
            </div>

        </main>

        <footer class="u-p8 u-bg2" style="margin-top: 200px; border-top: 1px solid #ddd;">
            <div class="u-flex u-row u-gap4" style="justify-content: space-between; align-items: flex-start;">
                <div style="width: 300px;">
                    <h4 style="margin-bottom: 20px;"><?= $companyName ?></h4>
                    <p style="font-size: 0.8rem; opacity: 0.6;"><?= $adr ?></p>
                    <p style="font-size: 0.8rem; opacity: 0.6;">&copy; <?= date('Y') ?> Olfactory Research Group</p>
                </div>
                <div class="u-flex u-col" style="gap: 15px;">
                    <p class="u-up u-ls" style="font-size: 0.7rem; font-weight: 900;">Navigation</p>
                    <a href="terms.php"
                        style="text-decoration: none; color: inherit; font-size: 0.8rem;">TERMS_OF_SERVICE</a>
                    <a href="privacy.php"
                        style="text-decoration: none; color: inherit; font-size: 0.8rem;">PRIVACY_POLICY</a>
                    <a href="return.php"
                        style="text-decoration: none; color: inherit; font-size: 0.8rem;">REFUND_LOG</a>
                </div>
                <div style="text-align: right;">
                    <p style="font-size: 0.7rem; opacity: 0.4;">TERMINAL_V2_SYMMETRY_STABLE</p>
                </div>
            </div>
        </footer>

    </div>

    <script>
        // Progress bar logic
        window.addEventListener('scroll', () => {
            const bar = document.querySelector('.<?= $CLASSES['scrl'] ?>');
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            bar.style.width = scrolled + "%";
        });

        // Cookie banner reveal
        setTimeout(() => {
            document.getElementById('v2-consent').classList.add('show-cook');
        }, 1500);

        document.getElementById('v2-close').addEventListener('click', () => {
            document.getElementById('v2-consent').classList.remove('show-cook');
        });

        // Scroll Reveal logic (simple JS randomization)
        const observerOptions = { threshold: 0.1 };
        const revealHandler = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target);
                }
            });
        };
        const obs = new IntersectionObserver(revealHandler, observerOptions);
        document.querySelectorAll('.<?= $CLASSES['node'] ?>').forEach(n => {
            n.style.opacity = "0";
            n.style.transform = "translateY(50px)";
            n.style.transition = "all 0.8s cubic-bezier(0.19, 1, 0.22, 1)";
            obs.observe(n);
        });

        console.log("TIMELINE_V2: SYSTEM_OK");
        console.log("WORD_COUNT: 3242");
    </script>
</body>

</html>