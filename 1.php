<?php
// Unique class generator
$seed = substr(md5('the_canvas_' . microtime()), 0, 8);
function cv($name)
{
    global $seed;
    return 'cv_' . substr(md5($name . $seed), 0, 6);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Master the art of makeup with expert techniques, color theory, and application methods that transform your natural beauty into artistry.">
    <title><?= $companyName ?> | The Art of Makeup Mastery</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Raleway:wght@300;500;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cv-gold: #d4af37;
            --cv-rose: #c9766f;
            --cv-cream: #f5f5dc;
            --cv-dark: #2a2a2a;
        }

        body {
            font-family: 'Raleway', sans-serif;
            background: linear-gradient(135deg, #f5f5dc 0%, #e8e0d5 100%);
            color: var(--cv-dark);
            overflow-x: hidden;
        }

        .<?= cv('hero') ?> {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background: radial-gradient(circle at center, rgba(212, 175, 55, 0.1), transparent 70%);
        }

        .<?= cv('hero-title') ?> {
            font-family: 'Cinzel', serif;
            font-size: 6rem;
            color: var(--cv-dark);
            margin-bottom: 30px;
            letter-spacing: 8px;
            text-transform: uppercase;
        }

        .<?= cv('subtitle') ?> {
            font-size: 1.4rem;
            font-weight: 300;
            color: #666;
            max-width: 600px;
            margin: 0 auto 50px;
            line-height: 2;
        }

        .<?= cv('container') ?> {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 50px;
        }

        .<?= cv('section') ?> {
            padding: 100px 0;
        }

        .<?= cv('section-title') ?> {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            text-align: center;
            margin-bottom: 70px;
            color: var(--cv-dark);
            position: relative;
        }

        .<?= cv('section-title') ?>::after {
            content: '';
            display: block;
            width: 100px;
            height: 2px;
            background: linear-gradient(to right, var(--cv-gold), var(--cv-rose));
            margin: 25px auto 0;
        }

        .<?= cv('text') ?> {
            font-size: 1.15rem;
            line-height: 2;
            margin-bottom: 28px;
            text-align: justify;
            color: #4a4a4a;
        }

        .<?= cv('layer') ?> {
            background: white;
            padding: 60px;
            margin: 50px 0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-left: 5px solid var(--cv-gold);
        }

        .<?= cv('grid') ?> {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin: 60px 0;
        }

        .<?= cv('card') ?> {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.05), rgba(201, 118, 111, 0.05));
            padding: 45px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .<?= cv('card-title') ?> {
            font-family: 'Cinzel', serif;
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--cv-dark);
        }

        .<?= cv('highlight') ?> {
            background: linear-gradient(135deg, var(--cv-gold), var(--cv-rose));
            color: white;
            padding: 50px;
            border-radius: 10px;
            margin: 60px 0;
        }

        .<?= cv('cookie') ?> {
            position: fixed;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            text-align: center;
            z-index: 1000;
            max-width: 500px;
        }

        .<?= cv('cookie-btn') ?> {
            background: linear-gradient(135deg, var(--cv-gold), var(--cv-rose));
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 15px;
        }

        footer {
            background: var(--cv-dark);
            color: white;
            padding: 70px 50px 40px;
            text-align: center;
        }

        .<?= cv('footer-links') ?> {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 30px 0;
        }

        .<?= cv('footer-link') ?> {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }

        .<?= cv('footer-link') ?>:hover {
            color: var(--cv-gold);
        }

        @media (max-width: 1024px) {
            .<?= cv('hero-title') ?> {
                font-size: 3.5rem;
            }

            .<?= cv('grid') ?> {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="<?= cv('cookie') ?>" id="privacy-notice">
        <p style="font-weight: 700; margin-bottom: 10px; color: var(--cv-dark);">Privacy Notice</p>
        <p style="font-size: 0.95rem; color: #666;">We use cookies to enhance your experience and provide personalized
            beauty recommendations.</p>
        <button class="<?= cv('cookie-btn') ?>"
            onclick="document.getElementById('privacy-notice').style.display='none'">Accept</button>
    </div>

    <header class="<?= cv('hero') ?>">
        <div>
            <h1 class="<?= cv('hero-title') ?>">The Canvas</h1>
            <p class="<?= cv('subtitle') ?>">Your face is art. Your makeup is the medium. Master the techniques that
                transform beauty into artistry.</p>
        </div>
    </header>

    <div class="<?= cv('container') ?>">

        <section class="<?= cv('section') ?>">
            <h2 class="<?= cv('section-title') ?>">The Foundation of Mastery</h2>

            <p class="<?= cv('text') ?>">Makeup is often dismissed as superficial, but those who truly understand it
                know better. Makeup is art, self-expression, and confidence all rolled into one transformative ritual.
                It's not about hiding who you are—it's about enhancing your natural features, expressing your
                creativity, and presenting yourself to the world exactly as you choose.</p>

            <p class="<?= cv('text') ?>">The journey to makeup mastery begins not with products, but with understanding
                your unique canvas. Your face has its own architecture—the angles of your cheekbones, the shape of your
                eyes, the fullness of your lips, the structure of your brows. Great makeup artists don't fight against
                these features; they work with them, enhancing natural beauty while creating the illusion of dimension,
                symmetry, and light.</p>

            <div class="<?= cv('layer') ?>">
                <h3 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-bottom: 25px;">Understanding Your
                    Face Shape</h3>
                <p class="<?= cv('text') ?>">Every face belongs to a general category: oval, round, square, heart, or
                    diamond. Understanding your face shape helps you apply techniques that create balance and harmony.
                    Oval faces are naturally balanced and can wear most styles. Round faces benefit from contouring that
                    creates definition and length. Square faces are softened with curved application techniques.
                    Heart-shaped faces balance a wider forehead with emphasis on the lower face. Diamond faces highlight
                    cheekbones while softening angular jawlines.</p>
            </div>

            <div class="<?= cv('grid') ?>">
                <div class="<?= cv('card') ?>">
                    <h3 class="<?= cv('card-title') ?>">Skin Preparation</h3>
                    <p class="<?= cv('text') ?>">Great makeup starts with great skin. Cleanse thoroughly, apply
                        treatment products, then moisturize and prime. Your primer creates a smooth canvas, fills in
                        fine lines and pores, and helps makeup adhere and last all day. Choose primers based on your
                        needs: hydrating for dry skin, mattifying for oily skin, color-correcting for specific concerns.
                    </p>
                </div>
                <div class="<?= cv('card') ?>">
                    <h3 class="<?= cv('card-title') ?>">Color Theory</h3>
                    <p class="<?= cv('text') ?>">Understanding color is essential. Warm undertones (yellow, peachy,
                        golden) suit warm makeup shades. Cool undertones (pink, red, blue) look best in cool-toned
                        products. Neutral undertones can wear both. Test foundation on your jawline in natural light—the
                        right shade disappears into your skin rather than sitting on top of it.</p>
                </div>
            </div>
        </section>

        <section class="<?= cv('section') ?>">
            <h2 class="<?= cv('section-title') ?>">The Art of Application</h2>

            <p class="<?= cv('text') ?>">Foundation is the true foundation of your look. It evens skin tone, hides
                imperfections, and creates a smooth base for everything that follows. But application technique matters
                more than the product itself. Using the wrong method can make even the finest foundation look cakey,
                streaky, or unnatural.</p>

            <p class="<?= cv('text') ?>">Brushes, sponges, and fingers each create different finishes. Brushes buff
                foundation into skin for buildable coverage with a natural finish. Dampened sponges bounce product onto
                skin for a dewy, airbrushed effect. Fingers warm product and press it into skin for a skin-like finish.
                Experiment to find what works for your skin and your desired look.</p>

            <p class="<?= cv('text') ?>">Concealer is not just for under-eye circles. Strategic concealer placement
                brightens, highlights, and corrects. Use a shade one or two shades lighter than your foundation under
                eyes and on high points of the face—down the bridge of the nose, on top of cheekbones, in the center of
                the forehead, on the chin. This creates dimension and draws light to these areas, making you look more
                awake and youthful.</p>

            <p class="<?= cv('text') ?>">For dark circles, color correction might be necessary first. Orange and peach
                tones neutralize blue and purple darkness. Yellow corrects purple and red. Green neutralizes redness.
                Apply corrector before concealer, using just enough to cancel the discoloration without creating a heavy
                base.</p>

            <div class="<?= cv('highlight') ?>">
                <h3 style="font-family: 'Cinzel', serif; font-size: 2.2rem; margin-bottom: 20px;">Pro Secret: The
                    Triangle Technique</h3>
                <p style="font-size: 1.2rem; line-height: 2;">Instead of dotting concealer directly under eyes, draw an
                    inverted triangle with the base under your eye and the point toward your cheek. Blend upward and
                    outward. This covers a larger area, highlights the high point of your cheekbone, and creates a
                    lifting effect that makes you look more awake and youthful.</p>
            </div>

            <p class="<?= cv('text') ?>">Contouring and highlighting create dimension. Your face is three-dimensional,
                but foundation flattens it. Strategic shading and highlighting bring dimension back. Contour (a shade or
                two darker than your natural skin) goes in the hollows of cheeks, along the hairline, along the jawline,
                and down the sides of the nose. Highlight (a lighter, luminous product) goes on the high points of
                cheekbones, bridge of the nose, cupid's bow, center of the forehead, and center of the chin.</p>

            <p class="<?= cv('text') ?>">The key is blending. Harsh lines look costume-like. Soft, diffused edges look
                natural and professional. Use a fluffy brush in circular motions to blend edges until there are no
                visible lines of demarcation. Your contour should create the illusion of shadow, your highlight should
                catch the light naturally.</p>

            <p class="<?= cv('text') ?>">Blush brings life back to the face. After foundation and contour, your face can
                look flat and colorless. Blush mimics natural flush and makes you look healthy and vibrant. Application
                depends on face shape. For most, smile and apply to the apples of cheeks, blending upward toward
                temples. For round faces, apply higher on cheekbones for a lifting effect. For long faces, apply across
                the apples horizontally to create width.</p>
        </section>

        <section class="<?= cv('section') ?>">
            <h2 class="<?= cv('section-title') ?>">Eyes: The Window to Expression</h2>

            <p class="<?= cv('text') ?>">Eye makeup is where artistry truly shines. The possibilities are endless—from
                natural, barely-there looks to dramatic, editorial creations. But regardless of style, the principles
                remain the same: enhance your eye shape, create dimension, and draw attention to your most expressive
                feature.</p>

            <p class="<?= cv('text') ?>">Eye shape determines the most flattering application. Hooded eyes benefit from
                deeper color in the crease and highlight on the brow bone to create the illusion of more lid space.
                Deep-set eyes look best with lighter shades on the lid and darker shades blended upward and outward to
                bring eyes forward. Prominent eyes benefit from darker, matte shades on the lid to create depth.
                Close-set eyes open up with lighter shades in inner corners. Wide-set eyes come together with deeper
                shades concentrated toward the inner corners.</p>

            <p class="<?= cv('text') ?>">Eyeshadow application follows a basic formula: light shades highlight and open
                up areas, medium shades create soft definition, dark shades add depth and drama. A classic technique is
                to apply a light shade over the entire lid and brow bone, a medium transitional shade in the crease, and
                a darker shade on the outer corner and blended into the crease. This creates dimension and makes eyes
                look larger and more defined.</p>

            <p class="<?= cv('text') ?>">Eyeliner is powerful but tricky. A line that's too thick can make eyes look
                smaller. A line that's uneven can throw off your entire face. For beginners, start small. A thin line
                tight to the lashes adds definition without drama. Wing it out slightly at the outer corner for subtle
                lift. As you gain confidence, experiment with thicker lines, dramatic wings, or colored liners for
                artistic flair.</p>

            <p class="<?= cv('text') ?>">Mascara is the most transformative single product in makeup. It opens eyes,
                adds definition, and creates polish even on bare faces. Application technique matters: wiggle the wand
                at the base of lashes, then sweep upward. This deposits more product at roots for volume and length.
                Multiple thin coats prevent clumping better than one thick coat. Let each coat dry before applying the
                next.</p>

            <p class="<?= cv('text') ?>">Brows frame the face. Well-groomed, defined brows can make you look more
                polished instantly. The perfect brow shape is personal, but general principles guide us. Your brow
                should start directly above the inner corner of your eye. The arch should peak above the outer edge of
                your iris. The brow should end at a diagonal line from your nostril through the outer corner of your
                eye. Fill sparse areas with short, hair-like strokes rather than solid lines. Set with clear or tinted
                brow gel to keep everything in place.</p>
        </section>

        <section class="<?= cv('section') ?>">
            <h2 class="<?= cv('section-title') ?>">Lips: The Finishing Touch</h2>

            <p class="<?= cv('text') ?>">Lip color can make or break a look. A bold lip demands attention and
                confidence. A nude lip creates polish and lets other features shine. Understanding lip products and
                application transforms this finishing touch into art.</p>

            <p class="<?= cv('text') ?>">Lip liner prevents feathering and bleeding, especially with bold colors. Choose
                a shade that matches your lipstick or your natural lip color. Line just outside your natural lip line to
                create the illusion of slightly fuller lips, or line precisely on your natural lip line for definition
                without obvious enhancement. Fill in your entire lip with liner before applying lipstick—this creates a
                base that helps color last longer.</p>

            <p class="<?= cv('text') ?>">Lipstick finishes range from matte to glossy, each creating different effects.
                Matte lipsticks are long-lasting and sophisticated but can be drying. Satin finishes offer comfortable
                wear with some shine. Glosses add dimension and make lips look fuller and more youthful. For everyday
                wear, many prefer satin or cream finishes that balance longevity with comfort.</p>

            <p class="<?= cv('text') ?>">Color choice should consider your skin tone, undertone, and overall look. Fair
                skin looks beautiful in cool pinks and berry shades. Medium skin glows in warm reds, corals, and rich
                berries. Deep skin is stunning in deep berries, rich browns, and bold reds. But rules are meant to be
                broken—experiment until you find what makes you feel confident and beautiful.</p>

            <p class="<?= cv('text') ?>">The psychology of makeup is real. Studies show that wearing makeup can increase
                confidence, improve perceived competence, and even affect how others treat you. But the most important
                effect is entirely internal—makeup is an act of self-care, a creative outlet, and a tool for
                self-expression. The best makeup is the makeup that makes you feel like the best version of yourself.
                Master the techniques, understand the principles, but always remember that the rules are just
                guidelines. Your face is your canvas. Create whatever makes you happy.</p>
        </section>

    </div>

    <footer>
        <h3 style="font-family: 'Cinzel', serif; font-size: 2rem; margin-bottom: 15px;"><?= $companyName ?></h3>
        <p style="color: #aaa; max-width: 600px; margin: 0 auto 30px; line-height: 1.8;">Empowering you to express your
            unique beauty through the artistry of makeup.</p>
        <p style="color: #888; font-size: 0.95rem; margin-bottom: 20px;"><?= $adr ?></p>
        <div class="<?= cv('footer-links') ?>">
            <a href="terms.php" class="<?= cv('footer-link') ?>">Terms</a>
            <a href="privacy.php" class="<?= cv('footer-link') ?>">Privacy</a>
            <a href="return.php" class="<?= cv('footer-link') ?>">Returns</a>
        </div>
        <p style="color: #666; font-size: 0.9rem; margin-top: 40px;">&copy; <?= date('Y') ?> <?= $companyName ?>. All
            rights reserved.</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth' });
            });
        });

        const layers = document.querySelectorAll('.<?= cv('layer') ?>');
        const observerOptions = { threshold: 0.2 };
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        layers.forEach(layer => {
            layer.style.opacity = '0';
            layer.style.transform = 'translateY(50px)';
            layer.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(layer);
        });
    </script>

</body>

</html>