<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV-Numérique</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<div class="wrap">
    <div class="menu">
        <a href="#pre">Présentation</a>
        <a href="#par">Parcours</a>
        <a href="#comp">Compétences</a>
        <a href="#cont">Contact</a>
    </div>
    <div class="js-navDots">
        <div class="fond-bleu">
            <div class="page-one">
                <h1>Théo Buffet</h1>
                <h2>CV Interactif</h2>
                <h3 id="pre">/ Présentation /</h3>

                <div class="présentation">
                    <p> Bonjour, Moi c'est Théo Buffet, étudiant en 1ère année au DUT MMI de Champs-sur-Marne et vous
                        êtes
                        ici sur
                        mon CV Interactif personel, vous allez pouvoir découvrir mes compétences et j'espère que je
                        pourrais
                        vous
                        convaincre de mes qualités. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="js-navDots">
        <div class="page-two">

            <h3 class="parcours_titre" id="par">/ Parcours /</h3>

            <div class="parcours5">
                <h4>Expérience</h4>
                <h5>Février 2020 - Juin 2020</h5>
                <p>Projet tutoré de première année du DUT MMI, rôle de Développeur principalement mais aussi de
                    communicant écrit, Ce projet m'a appris à mener un gros travail en groupe de 4 sur de longs mois.
                </p>


            </div>

            <div class="parcours1">
                <h4>Etudes</h4>
                <h5>2019...</h5>
                <p>DUT Métiers du Multimédia et de l'Internet
                    IUT Université Gustave Eiffel, Champs-sur-Marne (77)
                </p>


            </div>

            <div class="parcours2">
                <h4>Diplôme</h4>
                <h5>2019</h5>
                <p>Baccalauréat scientifique option Physique Chimie
                    Lycée Agora - Puteaux Hauts-de-Seine (92)
                </p>


            </div>

            <div class="parcours3">
                <h4>Diplôme</h4>
                <h5>2016</h5>
                <p>Brevet des collèges Mention Assez Bien
                    Collège Jules Ferry - Hyères Var (82)
                </p>


            </div>

            <div class="parcours4">
                <h4>Stage</h4>
                <h5>2016</h5>
                <p>Stage d'observation dans une clinique Vétérinaire
                    stage de 3ème en immersion pendant une semaine
                    Lacrau Var (82)
                </p>


            </div>

        </div>
    </div>




    <div class="js-navDots">
        <div class="page-four">
            <h3 class="compétences_titre" id="comp">/ Compétences /</h3>
            <div class="progress-bar blue stripes">
                <span style="width: 80%"></span>
                <p class="barre1"> HTML/CSS </p>
            </div>

            <div class="progress-bar red stripes">
                <span style="width: 55%"></span>
                <p class="barre2"> JS/JQuery </p>
            </div>

            <div class="progress-bar purple stripes">
                <span style="width: 75%"></span>
                <p class="barre3"> PHP/SQL </p>
            </div>

            <div class="progress-bar orange stripes">
                <span style="width: 50%"></span>
                <p class="barre4"> Photoshop/Illustrator </p>
            </div>

            <div class="progress-bar green stripes">
                <span style="width: 55%"></span>
                <p class="barre5"> AdobeXD </p>
            </div>

            <div class="progress-bar pink stripes">
                <span style="width: 60%"></span>
                <p class="barre6"> PremierePro/AfterEffects </p>
            </div>

            <div class="progress-bar brown stripes">
                <span style="width: 90%"></span>
                <p class="barre7"> Excel/Word</p>
            </div>

        </div>
    </div>

</div>
<div class="js-navDots">
    <div class="page-three">




        <div class="contact">
            <h2 class="titre_contact" id="cont">/ Contact /</h2>
            <?php if (!isset($_GET['success'])): ?>

            <form action="connect.php" method="POST">
                <!-- <fieldset> -->

                <p>
                    <label for="nom">Nom</label><input type="text" required name="nom">
                </p>

                <p>
                    <label for="prenom">Prénom</label><input type="text" required name="prenom">
                </p>

                <p>
                    <label for="email">Email</label><input type="email" required name="email">

                </p>

                <p>
                    <label for="sujet">Sujet</label> <input type="text" name="sujet"
                        placeholder="Un petit titre pour m'aider à trier les messages ^^">
                </p>

                <p><textarea cols="40" rows="5" name="message"
                        placeholder="Il y a toute la place d'écrire ici!"></textarea></p>
                <!-- </fieldset> -->

                <input type="submit" value="Envoyer" class="bot" name="submit">

            </form>
            <?php else: ?>
            <p class="reponse">Je vous répondrais par mail dès que possible :) !</p>
            <?php endif; ?>

        </div>
    </div>
</div>
</div>

<script>
    const VND = ((document, window) => {
        'use strict';

        const render = {
            navDots(sections) {
                const listOfdots = sections.map((element, index) =>
                    `<li id="nav-toSection#${index}" class="nav__dot"></li>`).join('\r\n');

                document.body.innerHTML += `<nav id="nav-dots"><ul>${listOfdots}</ul></nav>`;
            },
        };


        const normalized = {
            positionTop(positionTop) {
                return positionTop - getSize.headerHeight();
            },
        };

        const is = {
            scrollThrowSection(positionScroll) {
                const {
                    rangeY: {
                        value
                    }
                } = position;

                return positionScroll >= value.start &&
                    positionScroll < value.end;
            },

            visibleElement(element) {
                const styleDisplay = getComputedStyle(element, null)['display'];
                const styleVisibility = getComputedStyle(element, null)['visibility'];

                return styleDisplay !== 'none' && styleVisibility !== 'hidden';
            },
        };


        const getSize = {
            headerHeight() {
                const header = document.querySelector('header');

                if (header) {
                    const position = getComputedStyle(header, null)['position'];
                    return position === 'fixed' ? header.clientHeight || header.offsetHeight : 0;
                }
                return 0;
            },

            fullHeight(element) {
                const marginBottom = parseInt(getComputedStyle(element, null)['margin-bottom']);

                return element.offsetHeight + marginBottom;
            },
        };

        const scroll = {
            top(value) {
                scrollBy({
                    top: value,
                    left: 0,
                    behavior: 'smooth',
                });
            },

            stop(callBack) {
                let currentPageY = null;
                let scrollingTimeout = null;

                const isScrolling = () => {
                    if (currentPageY !== pageYOffset) {
                        currentPageY = pageYOffset;

                        clearTimeout(scrollingTimeout);
                        setTimeout(isScrolling, 66);
                        scrollingTimeout = setTimeout(callBack, 66);
                    }
                };
                isScrolling();
            },
        };

        const keyboard = {
            getKeyCode(event) {
                return event.which || event.keyCode;
            },

            '33'(event, sections) {
                const prevPositionTop = position.getClientPrevTop(sections);

                event.preventDefault();
                scroll.top(prevPositionTop);
            },

            '34'(event, sections) {
                const nextPositionTop = position.getClientNextTop(sections);

                event.preventDefault();
                scroll.top(nextPositionTop);
            },
        };

        const dom = {
            getAllElements(cls) {
                const listOfElements = document.querySelectorAll(`.${cls}`);
                return Array.from(listOfElements);
            },

            containClass(element, cls) {
                return element.classList.contains(cls);
            },

            addClass(element, cls) {
                if (!this.containClass(element, cls)) {
                    element.classList.add(cls);
                }
            },

            removeClass(elements, cls) {
                const element = elements.find(element => this.containClass(element, cls));

                if (element) {
                    element.classList.remove(cls);
                }
            },

            toggleCls(removeFrom, addTo, cls) {
                this.removeClass(removeFrom, cls);
                this.addClass(addTo, cls);
            },

            toggleDots(indexOfSection) {
                const navDots = this.getAllElements('nav__dot');
                const nextDot = document.getElementById(`nav-toSection#${indexOfSection}`);
                this.toggleCls(navDots, nextDot, 'nav__dot--active');
            },
        };

        const position = {
            rangeY: {
                range: {
                    start: null,
                    end: null,
                },

                set value(element) {
                    this.range = {
                        start: element.offsetTop - 30,
                        end: element.offsetTop + getSize.fullHeight(element) - 30,
                    };
                },

                get value() {
                    return this.range;
                },

            },

            scrollThrow(section) {
                const positionScroll = Math.ceil(pageYOffset + getSize.headerHeight());

                if (!is.scrollThrowSection(positionScroll)) {
                    this.rangeY.value = section;
                }

                return is.scrollThrowSection(positionScroll);
            },

            getClientTop(element) {
                return element.getBoundingClientRect().top || element.getBoundingClientRect().y;
            },

            getClientPrevTop(sections) {
                const prevSection = sections.reduce((cur, acc) => {
                    const curPositionTop = this.getClientTop(cur);
                    const accPositionTop = this.getClientTop(acc);

                    return curPositionTop < 0 && accPositionTop < 0 ?
                        curPositionTop > accPositionTop ? cur : acc :
                        cur;
                });
                const prevPositionTop = this.getClientTop(prevSection);

                return normalized.positionTop(prevPositionTop);
            },

            getClientNextTop(sections) {
                const nexSection = sections.reduce((cur, acc) => {
                    const curPositionTop = this.getClientTop(cur);
                    const accPositionTop = this.getClientTop(acc);

                    return curPositionTop > getSize.headerHeight() + 10 ?
                        curPositionTop < accPositionTop ? cur : acc :
                        acc;
                });

                const nextPositionTop = this.getClientTop(nexSection);

                return normalized.positionTop(nextPositionTop);
            },
        };

        const handleListener = {
            listener({
                element,
                event,
                callBack,
                arg
            }) {
                element.addEventListener(event, (evn) => callBack({
                    evn,
                    arg
                }));
            },

            navDots({
                evn: {
                    target
                },
                arg: cls
            }) {
                if (target.tagName === 'LI') {
                    const indexOfSection = target.id.split('#')[1];
                    const sections = dom.getAllElements(cls);
                    const positionTop = position.getClientTop(sections[indexOfSection]);
                    const normalizedPosition = normalized.positionTop(positionTop);
                    const toggleDots = () => dom.toggleDots(indexOfSection);

                    scroll.top(normalizedPosition);
                    scroll.stop(toggleDots);
                }
            },

            pgUpDownKeys({
                arg: cls
            }) {
                const keyCode = keyboard.getKeyCode(event);
                const sections = dom.getAllElements(cls);

                if (keyboard[keyCode] && !!sections.length) {
                    keyboard[keyCode](event, sections);
                }
            },

            scrolling: {
                currentSection: null,
                indexOfSection: null,

                init({
                    arg: sections
                }) {
                    if (!position.scrollThrow(this.currentSection || sections[0])) {
                        this.currentSection = sections.find((section, index) => {
                            if (position.scrollThrow(section)) {
                                this.indexOfSection = index;
                                return true;
                            }
                        });
                        dom.toggleDots(this.indexOfSection);
                    }
                },
            },

            resize: {
                resizeTimeout: null,

                hideOnSmallScreen(screenSize) {
                    const navDots = document.getElementById('nav-dots');

                    window.screen.width <= screenSize ?
                        is.visibleElement(navDots) && (navDots.style.display = 'none') :
                        !is.visibleElement(navDots) && (navDots.style.display = 'flex');
                },

                init({
                    arg: screenSize
                }) {
                    if (!this.resizeTimeout) {
                        this.resizeTimeout = setTimeout(() => {
                            this.resizeTimeout = null;
                            this.hideOnSmallScreen(screenSize);
                        }, 66);
                    }
                },
            },
        };

        const init = function ({
            cls,
            hideOnScreenLess = 0
        } = {}) {
            const {
                listener,
                pgUpDownKeys,
                scrolling,
                resize,
                navDots: dotsListener,
            } = handleListener;

            render.navDots(dom.getAllElements(cls));
            resize.init({
                arg: hideOnScreenLess
            });

            const sections = dom.getAllElements(cls);
            const navDots = document.getElementById('nav-dots');
            const firstDot = document.getElementById('nav-toSection#0');

            dom.addClass(firstDot, 'nav__dot--active');

            listener({
                element: document,
                event: 'keydown',
                callBack: pgUpDownKeys,
                arg: cls,
            });
            listener({
                element: document,
                event: 'scroll',
                callBack: scrolling.init.bind(handleListener.scrolling),
                arg: sections,
            });
            listener({
                element: window,
                event: 'resize',
                callBack: resize.init.bind(handleListener.resize),
                arg: hideOnScreenLess,
            });
            listener({
                element: navDots,
                event: 'click',
                callBack: dotsListener,
                arg: cls,
            });
        };

        return {
            init: init,
        };
    })(document, window);

    VND.init({
        cls: 'js-navDots',
        hideOnScreenLess: 640,
    })
</script>
<script>
    $(document).ready(function () {
        $("a").on('click', function (event) {

            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    window.location.hash = hash;
                });
            }
        });
    });
</script>

</body>

</html>