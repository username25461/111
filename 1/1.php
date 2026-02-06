<?php
$seed = substr(md5('chromatics_' . microtime()), 0, 8);
function cr($n)
{
    global $seed;
    return 'cr_' . substr(md5($n . $seed), 0, 6);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Master the art of color in makeup with expert guidance on color theory, undertones, and creating harmonious looks.">
    <title><?= $companyName ?> | The Art of Color in Makeup</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Work+Sans:wght@300;600&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            background: #fafafa;
            color: #1a1a1a;
        }

        .<?= cr('hero') ?> {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, #ff6b9d 0%, #c06c84 25%, #6c5b7b 50%, #355c7d 75%, #2a9d8f 100%);
            color: white;
            text-align: center;
            padding: 60px 40px;
        }

        .<?= cr('h1') ?> {
            font-family: 'Abril Fatface', cursive;
            font-size: 6rem;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .<?= cr('lead') ?> {
            font-size: 1.5rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
        }

        .<?= cr('main') ?> {
            max-width: 1000px;
            margin: 0 auto;
            padding: 100px 50px;
        }

        .<?= cr('section') ?> {
            margin-bottom: 90px;
        }

        .<?= cr('h2') ?> {
            font-family: 'Abril Fatface', cursive;
            font-size: 3.5rem;
            margin-bottom: 40px;
            background: linear-gradient(135deg, #ff6b9d, #2a9d8f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .<?= cr('h3') ?> {
            font-family: 'Abril Fatface', cursive;
            font-size: 2.2rem;
            margin: 45px 0 20px;
            color: #355c7d;
        }

        .<?= cr('p') ?> {
            font-size: 1.15rem;
            line-height: 1.9;
            margin-bottom: 25px;
            text-align: justify;
            color: #4a4a4a;
        }

        .<?= cr('palette') ?> {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
            margin: 40px 0;
        }

        .<?= cr('swatch') ?> {
            height: 100px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .<?= cr('cookie') ?> {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 350px;
            z-index: 1000;
        }

        .<?= cr('cookie-btn') ?> {
            background: linear-gradient(135deg, #ff6b9d, #2a9d8f);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 10px;
        }

        footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 50px;
            text-align: center;
        }

        .<?= cr('flinks') ?> {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 25px 0;
        }

        .<?= cr('flink') ?> {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }

        .<?= cr('flink') ?>:hover {
            color: #ff6b9d;
        }

        @media (max-width: 768px) {
            .<?= cr('h1') ?> {
                font-size: 3rem;
            }

            .<?= cr('palette') ?> {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="<?= cr('cookie') ?>" id="notice-bar">
        <p style="font-weight: 700; margin-bottom: 8px; color: #1a1a1a;">Cookie Policy</p>
        <p style="font-size: 0.9rem; color: #666;">We use cookies to enhance your experience.</p><button
            class="<?= cr('cookie-btn') ?>"
            onclick="document.getElementById('notice-bar').style.display='none'">Accept</button>
    </div>
    <header class="<?= cr('hero') ?>">
        <div>
            <h1 class="<?= cr('h1') ?>">Chromatics</h1>
            <p class="<?= cr('lead') ?>">Unlock the power of color theory to create makeup looks that harmonize,
                enhance, and mesmerize</p>
        </div>
    </header>
    <main class="<?= cr('main') ?>">
        <section class="<?= cr('section') ?>">
            <h2 class="<?= cr('h2') ?>">The Foundation: Understanding Color</h2>
            <p class="<?= cr('p') ?>">Color isn't random. It follows principles that artists have understood for
                centuries, and these same principles apply to makeup artistry. When you understand how colors interact,
                you move beyond following tutorials to creating looks that are uniquely yours, perfectly suited to your
                coloring, and always harmonious.</p>
            <p class="<?= cr('p') ?>">The color wheel is your roadmap. Primary colors—red, blue, yellow—can't be created
                by mixing other colors. Secondary colors—orange, green, purple—are created by mixing primaries. Tertiary
                colors fill the spaces between, creating the full spectrum. This isn't just theory—it's a practical tool
                for choosing flattering combinations.</p>
            <div class="<?= cr('palette') ?>">
                <div class="<?= cr('swatch') ?>" style="background: #ff6b9d;"></div>
                <div class="<?= cr('swatch') ?>" style="background: #c06c84;"></div>
                <div class="<?= cr('swatch') ?>" style="background: #6c5b7b;"></div>
                <div class="<?= cr('swatch') ?>" style="background: #355c7d;"></div>
                <div class="<?= cr('swatch') ?>" style="background: #2a9d8f;"></div>
            </div>
            <p class="<?= cr('p') ?>">Colors opposite each other on the wheel are complementary. Blue and orange, red
                and green, purple and yellow. These create maximum contrast and make each other appear more vibrant. In
                makeup, this means purple shades make green eyes pop, warm oranges enhance blue eyes, and green color
                corrector neutralizes redness.</p>
            <p class="<?= cr('p') ?>">Analogous colors sit next to each other on the wheel. Think red, red-orange, and
                orange, or blue, blue-green, and green. These create harmonious, cohesive looks. An eyeshadow look using
                shades from burgundy through copper to bronze uses analogous colors for a sophisticated, blended effect.
            </p>
        </section>
        <section class="<?= cr('section') ?>">
            <h2 class="<?= cr('h2') ?>">Warm vs. Cool: The Critical Distinction</h2>
            <p class="<?= cr('p') ?>">Every color has a temperature. Warm colors contain yellow or gold undertones—think
                peach, coral, warm browns, brick reds. Cool colors contain blue or pink undertones—think rose, mauve,
                cool grays, berry shades. This distinction is fundamental to choosing flattering makeup.</p>
            <p class="<?= cr('p') ?>">Your skin has undertones too: warm (yellow or golden), cool (pink or red), or
                neutral (a balanced mix). The easiest way to determine yours? Look at your wrist veins in natural light.
                Blue or purple veins suggest cool undertones. Green veins suggest warm undertones. If you can't tell or
                they look blue-green, you're likely neutral and can wear both.</p>
            <h3 class="<?= cr('h3') ?>">Choosing Your Palette</h3>
            <p class="<?= cr('p') ?>">Warm-toned skin glows in warm makeup shades. Think peachy blushes, golden
                highlighters, warm browns and coppers on eyes, coral and orange-based lipsticks. These harmonize with
                your natural coloring, creating a cohesive, radiant effect. Cool-toned makeup can look slightly off,
                washing you out or creating discord.</p>
            <p class="<?= cr('p') ?>">Cool-toned skin shines in cool makeup shades. Pink blushes, champagne or icy
                highlighters, cool taupes and purples on eyes, pink and berry lipsticks. These complement your
                undertones naturally. Warm-toned makeup might appear too yellow or orange against your skin.</p>
            <p class="<?= cr('p') ?>">Neutral undertones are the lucky ones—you can wear both warm and cool shades
                successfully. This doesn't mean every shade works, but you have more flexibility to choose based on the
                look you want rather than being restricted by your skin tone.</p>
        </section>
        <section class="<?= cr('section') ?>">
            <h2 class="<?= cr('h2') ?>">Advanced Techniques</h2>
            <h3 class="<?= cr('h3') ?>">Color Correcting</h3>
            <p class="<?= cr('p') ?>">Before concealer, color correctors use complementary color theory to neutralize
                discoloration. Dark circles with blue or purple tones are neutralized with peachy or orange corrector.
                Redness from acne or rosacea is neutralized with green. Dark spots and hyperpigmentation on deeper skin
                tones benefit from deeper orange or red correctors. Yellow corrector neutralizes purple bruises or
                veins. Apply your corrector first, then concealer over it for seamless coverage.</p>
            <h3 class="<?= cr('h3') ?>">Creating Depth and Dimension</h3>
            <p class="<?= cr('p') ?>">Light colors advance and highlight. Dark colors recede and contour. This principle
                creates dimension on your face. Light, shimmery shades on the inner corner of eyes and center of the lid
                make eyes look larger and more awake. Deeper shades in the outer corner and crease create depth and
                definition. Highlight on the high points of your face—cheekbones, bridge of nose, cupid's bow—brings
                them forward. Contour in the hollows—under cheekbones, along jawline, sides of nose—creates shadow and
                structure.</p>
            <h3 class="<?= cr('h3') ?>">Monochromatic Looks</h3>
            <p class="<?= cr('p') ?>">Using variations of a single color creates sophisticated, cohesive looks.
                Different shades and finishes of pink—a matte rose on lids, deeper berry in the crease, glossy pink on
                lips, soft pink blush—creates harmony and elegance. The trick is varying the intensity and finish to
                create interest while maintaining color cohesion.</p>
        </section>
        <section class="<?= cr('section') ?>">
            <h2 class="<?= cr('h2') ?>">Seasonal Color Analysis</h2>
            <p class="<?= cr('p') ?>">Seasonal color analysis categorizes people into seasons based on their coloring,
                helping identify most flattering shades. Spring types have warm, light coloring—think peachy skin,
                golden hair, bright eyes. They glow in warm, clear colors like coral, peach, golden yellow, warm pink.
                Autumn types have warm, deep coloring—golden or olive skin, warm brown or red hair, amber or green eyes.
                They shine in rich, warm colors like rust, bronze, olive, warm burgundy.</p>
            <p class="<?= cr('p') ?>">Summer types have cool, light coloring—pink-toned skin, ash hair, blue or gray
                eyes. They look amazing in soft, cool colors like rose, lavender, soft pink, cool gray. Winter types
                have cool, deep coloring—pale or deep skin with cool undertones, dark hair, striking eyes. They rock
                bold, cool colors like bright pink, true red, icy blue, deep purple.</p>
            <p class="<?= cr('p') ?>">This system isn't absolute—many people are a mix or fall between categories—but
                it's a helpful starting point for identifying your most flattering palette. Pay attention to which
                colors make you look radiant versus washed out or sallow. Your skin and eyes will tell you what works.
            </p>
        </section>
        <section class="<?= cr('section') ?>">
            <h2 class="<?= cr('h2') ?>">Breaking the Rules</h2>
            <p class="<?= cr('p') ?>">Here's the secret: all these rules are guidelines, not laws. Understanding color
                theory empowers you to make intentional choices, but it doesn't restrict your creativity. Want to wear a
                color that "isn't your season"? Adjust the shade slightly warmer or cooler, change the intensity, or
                alter the finish. Sheer washes of color are more forgiving than full-coverage application.</p>
            <p class="<?= cr('p') ?>">Makeup is art, and art is about expression. Sometimes you want to create contrast
                intentionally. Sometimes you want to experiment with unexpected combinations. Sometimes you just love a
                color regardless of whether it's "correct" for your coloring. That's not just okay—it's wonderful. The
                goal of understanding color theory is to give you tools, not to cage your creativity.</p>
            <p class="<?= cr('p') ?>">The most important rule in makeup? If it makes you feel beautiful and confident,
                it's perfect. Color theory is your foundation, but your intuition, preferences, and joy are what make
                your makeup truly yours. Experiment, play, learn what you love. The best makeup is makeup that makes you
                smile when you look in the mirror. Everything else is just details.</p>
        </section>
    </main>
    <footer>
        <h3 style="font-size: 2rem; margin-bottom: 15px;"><?= $companyName ?></h3>
        <p style="color: #aaa; margin-bottom: 20px;"><?= $adr ?></p>
        <div class="<?= cr('flinks') ?>"><a href="terms.php" class="<?= cr('flink') ?>">Terms</a><a href="privacy.php"
                class="<?= cr('flink') ?>">Privacy</a><a href="return.php" class="<?= cr('flink') ?>">Returns</a></div>
        <p style="color: #888; margin-top: 30px;">&copy; <?= date('Y') ?> <?= $companyName ?>. All rights reserved.</p>
    </footer>
</body>

</html>