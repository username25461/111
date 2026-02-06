<?php
$seed = substr(md5('radiant_skin_' . microtime()), 0, 8);
function rs($n)
{
    global $seed;
    return 'rs_' . substr(md5($n . $seed), 0, 6);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Advanced dermatology insights and science-backed approaches to achieving and maintaining radiant, healthy skin at every age.">
    <title><?= $companyName ?> | The Science of Radiant Skin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Merriweather:wght@300;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather', serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
            color: #263238;
        }

        .<?= rs('nav') ?> {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 60px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .<?= rs('logo') ?> {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #00838f;
        }

        .<?= rs('hero') ?> {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 120px 40px 60px;
            background: radial-gradient(circle, rgba(0, 131, 143, 0.05), transparent);
        }

        .<?= rs('h1') ?> {
            font-family: 'Montserrat', sans-serif;
            font-size: 5rem;
            font-weight: 700;
            color: #00838f;
            margin-bottom: 25px;
        }

        .<?= rs('tagline') ?> {
            font-size: 1.4rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            color: #546e7a;
        }

        .<?= rs('container') ?> {
            max-width: 1000px;
            margin: 0 auto;
            padding: 100px 50px;
        }

        .<?= rs('section') ?> {
            margin-bottom: 80px;
        }

        .<?= rs('h2') ?> {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            margin-bottom: 35px;
            color: #00838f;
        }

        .<?= rs('h3') ?> {
            font-family: 'Montserrat', sans-serif;
            font-Size: 2rem;
            margin: 40px 0 20px;
            color: #00695c;
        }

        .<?= rs('p') ?> {
            font-size: 1.1rem;
            line-height: 1.9;
            margin-bottom: 25px;
            text-align: justify;
            color: #37474f;
        }

        .<?= rs('highlight') ?> {
            background: linear-gradient(135deg, #b2dfdb, #80cbc4);
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
            border-left: 5px solid #00838f;
        }

        .<?= rs('cookie') ?> {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            z-index: 1000;
            max-width: 500px;
        }

        .<?= rs('cookie-btn') ?> {
            background: #00838f;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 12px;
        }

        footer {
            background: #263238;
            color: white;
            padding: 60px;
            text-align: center;
        }

        .<?= rs('flinks') ?> {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 25px 0;
        }

        .<?= rs('flink') ?> {
            color: #90a4ae;
            text-decoration: none;
            transition: color 0.3s;
        }

        .<?= rs('flink') ?>:hover {
            color: #00838f;
        }

        @media (max-width: 768px) {
            .<?= rs('h1') ?> {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>
    <nav class="<?= rs('nav') ?>">
        <div class="<?= rs('logo') ?>">Radiant Skin</div>
    </nav>
    <div class="<?= rs('cookie') ?>" id="privacy-bar">
        <p style="font-weight: 700; margin-bottom: 10px; color: #263238;">Privacy Notice</p>
        <p style="font-size: 0.95rem; color: #546e7a;">We use cookies to enhance your experience.</p><button
            class="<?= rs('cookie-btn') ?>"
            onclick="document.getElementById('privacy-bar').style.display='none'">Accept</button>
    </div>
    <header class="<?= rs('hero') ?>">
        <div>
            <h1 class="<?= rs('h1') ?>">Radiant Skin</h1>
            <p class="<?= rs('tagline') ?>">Science-backed dermatology for skin that glows with health at every age</p>
        </div>
    </header>
    <main class="<?= rs('container') ?>">
        <section class="<?= rs('section') ?>">
            <h2 class="<?= rs('h2') ?>">Understanding Your Skin's Biology</h2>
            <p class="<?= rs('p') ?>">Your skin is your body's largest organ, a complex ecosystem that deserves
                understanding and respect. It's not just a wrapper—it's a dynamic, living system that protects you from
                the environment, regulates your temperature, synthesizes vitamin D, and serves as your first line of
                immune defense. When we talk about skin health, we're talking about optimizing this remarkable organ's
                function.</p>
            <p class="<?= rs('p') ?>">The skin has three main layers. The epidermis, the outermost layer, constantly
                renews itself. Every 28 days or so, old skin cells shed and are replaced by fresh ones migrating up from
                below. This is why surface treatments work—you're not stuck with damaged skin forever. But it also means
                consistent care matters. What you do daily compounds over weeks and months.</p>
            <p class="<?= rs('p') ?>">The dermis, below the epidermis, contains the structural proteins that keep skin
                firm and elastic: collagen and elastin. These proteins give young skin its bounce and resilience. As we
                age, production slows and existing fibers break down. This is where targeted treatments—retinoids,
                peptides, vitamin C—can make real differences by stimulating cells to produce more of these essential
                proteins.</p>
            <p class="<?= rs('p') ?>">The hypodermis, the deepest layer, is mostly fat cells that cushion and insulate.
                As we age, this layer thins, contributing to that hollowed look and making skin more vulnerable to
                injury. While skincare can't rebuild this layer, protecting what you have through good nutrition,
                avoiding smoking, and using sun protection helps maintain it longer.</p>
        </section>
        <section class="<?= rs('section') ?>">
            <h2 class="<?= rs('h2') ?>">The Non-Negotiables</h2>
            <h3 class="<?= rs('h3') ?>">Sunscreen: Your Daily Shield</h3>
            <p class="<?= rs('p') ?>">If you take only one lesson from dermatology, let it be this: wear sunscreen every
                single day. UV radiation is the single biggest contributor to premature aging—more than any other
                factor. It breaks down collagen, damages DNA, creates free radicals that harm cells, and causes visible
                changes: wrinkles, dark spots, rough texture, visible blood vessels. And yes, it dramatically increases
                skin cancer risk.</p>
            <p class="<?= rs('p') ?>">Broad-spectrum SPF 30 minimum, applied generously every morning, reapplied if
                you're outdoors for extended periods. Sunscreen isn't vanity—it's health. Studies show people who use
                sunscreen daily show measurably less skin aging after just a few years compared to those who don't. The
                difference after decades is dramatic.</p>
            <h3 class="<?= rs('h3') ?>">Retinoids: The Gold Standard</h3>
            <p class="<?= rs('p') ?>">Retinoids (vitamin A derivatives) are the most well-researched anti-aging
                ingredient in dermatology. They speed up cell turnover, boost collagen production, fade dark spots, and
                improve skin texture. They're prescription-strength (tretinoin, retin-A) or over-the-counter (retinol,
                adapalene). Start slowly—irritation is common initially—and build tolerance gradually. Used
                consistently, retinoids deliver real, measurable improvements in skin quality.</p>
            <div class="<?= rs('highlight') ?>">
                <p style="font-size: 1.15rem; font-weight: 700; color: #00695c; margin-bottom: 15px;">Dermatologist's
                    Insight</p>
                <p class="<?= rs('p') ?>" style="margin: 0;">The best anti-aging strategy isn't expensive creams—it's
                    prevention. Sunscreen, retinoids, and a gentle routine started in your twenties will keep your skin
                    healthier at fifty than any amount of expensive treatments started late can achieve. Consistency
                    beats intensity every time.</p>
            </div>
        </section>
        <section class="<?= rs('section') ?>">
            <h2 class="<?= rs('h2') ?>">Common Skin Concerns</h2>
            <h3 class="<?= rs('h3') ?>">Acne: Not Just for Teenagers</h3>
            <p class="<?= rs('p') ?>">Adult acne is increasingly common, especially in women experiencing hormonal
                fluctuations. The approach should be gentle—harsh scrubbing and stripping make things worse by damaging
                the skin barrier and triggering more oil production. Gentle cleansing, salicylic acid or benzoyl
                peroxide for spot treatment, retinoids for prevention, and potentially hormonal therapy from a
                dermatologist for persistent cases.</p>
            <p class="<?= rs('p') ?>">Resist picking. It extends healing time, increases inflammation, and significantly
                raises the risk of permanent scarring. If you struggle with compulsive picking, consider seeing a
                therapist alongside your dermatologist—it's often as much a behavioral issue as a skin issue.</p>
            <h3 class="<?= rs('h3') ?>">Hyperpigmentation: Evening Your Tone</h3>
            <p class="<?= rs('p') ?>">Dark spots from sun damage, acne scars, or melasma are frustrating but treatable.
                The approach is multi-faceted: sunscreen to prevent new darkening, exfoliating acids (glycolic, lactic)
                to remove pigmented surface cells, brightening ingredients (vitamin C, niacinamide, alpha arbutin), and
                sometimes prescription hydroquinone for stubborn cases. Results take months—melanin is deep in the skin
                and only reaches the surface as cells turn over. Patience is essential.</p>
            <h3 class="<?= rs('h3') ?>">Rosacea: Managing Sensitivity</h3>
            <p class="<?= rs('p') ?>">Redness, visible blood vessels, and sensitivity characterize rosacea. It's a
                chronic condition requiring management, not a cure. Triggers vary—alcohol, spicy food, heat, stress—and
                identifying your personal triggers helps control flares. Gentle skincare is crucial—no harsh scrubs, no
                drying alcohols, no fragrance. Look for niacinamide to calm inflammation, green-tinted products to
                neutralize redness, and consider prescription treatments like azelaic acid or metronidazole from your
                dermatologist.</p>
        </section>
        <section class="<?= rs('section') ?>">
            <h2 class="<?= rs('h2') ?>">Professional Treatments</h2>
            <p class="<?= rs('p') ?>">Home care is foundational, but professional treatments can accelerate results for
                specific concerns. Chemical peels remove damaged surface layers, revealing fresher skin and stimulating
                collagen production. Microneedling creates controlled micro-injuries that trigger healing and collagen
                remodeling. Laser treatments target specific issues—pigment, redness, texture—with precision impossible
                at home.</p>
            <p class="<?= rs('p') ?>">These treatments aren't magic, and they require downtime and commitment. But for
                concerns that resist home care—deep wrinkles, significant sun damage, stubborn scarring—professional
                intervention, combined with excellent home maintenance, can deliver remarkable improvements. Always
                choose board-certified dermatologists or properly trained aestheticians. Your face isn't the place to
                bargain hunt.</p>
        </section>
        <section class="<?= rs('section') ?>">
            <h2 class="<?= rs('h2') ?>">Building a Sustainable Routine</h2>
            <p class="<?= rs('p') ?>">The perfect routine is the one you'll actually follow. Complicated multi-step
                rituals fail not because they don't work, but because they're unsustainable. Start with the basics:
                gentle cleanser, moisturizer, sunscreen in the morning; cleanser, treatment (retinoid or other active),
                moisturizer at night. That's it. Master this foundation for months before adding more products.</p>
            <p class="<?= rs('p') ?>">Your skin changes with seasons, stress, age, and health. What works in humid
                summer might not work in dry winter. What worked at twenty-five might not work at forty. Stay flexible.
                Pay attention to how your skin responds. Adjust as needed. The goal isn't perfection—it's healthy,
                resilient skin that functions well and makes you feel confident.</p>
            <p class="<?= rs('p') ?>">Finally, remember that skin is only part of overall health. Sleep, stress
                management, nutrition, exercise—all impact your skin profoundly. You can't out-skincare a terrible
                lifestyle. The most radiant skin comes from caring for your whole self: hydrating adequately, eating
                nutrient-dense foods, moving your body, managing stress, and yes, applying that sunscreen every morning.
                It all works together. Your skin is a reflection of how you care for yourself, inside and out.</p>
        </section>
    </main>
    <footer>
        <h3 style="font-size: 2rem; margin-bottom: 15px;"><?= $companyName ?></h3>
        <p style="color: #90a4ae; margin-bottom: 20px;"><?= $adr ?></p>
        <div class="<?= rs('flinks') ?>"><a href="terms.php" class="<?= rs('flink') ?>">Terms</a><a href="privacy.php"
                class="<?= rs('flink') ?>">Privacy</a><a href="return.php" class="<?= rs('flink') ?>">Returns</a></div>
        <p style="color: #546e7a; margin-top: 30px;">&copy; <?= date('Y') ?> <?= $companyName ?>. All rights reserved.
        </p>
    </footer>
</body>

</html>