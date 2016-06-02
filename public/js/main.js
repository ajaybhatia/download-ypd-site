window.scrollYLast = 0;
window.animScrollToY = function (targetY, callback) {
    window.scrollYLast = window.scrollY;

    targetY -= 60; // skip the header overlay.
    if (targetY < 0) targetY = 0; // oops.

    if (targetY === window.scrollY) {
        // we are already done. real helpful when the user is at the top and we want to go to Y=0.
        callback();
        return;
    }

    $("html, body").stop().animate({ scrollTop: targetY }, 800, 'swing').promise().done(callback);
};

function hasClass(original, className) {
    return (!!original) ? (!!original.match('(^|^.* )' + className + '( .*$|$)')) : (false);
}

function addClass(original, className) {
    if (!original) return className.split('  ').join(' ').trim();
    var m = original.match('(^|^.* )' + className + '( .*$|$)');
    return ((!!m) ? (original) : (original + ' ' + className)).split('  ').join(' ').trim();
}

function removeClass(original, className) {
    if (!original) return '';
    var m = original.match('(^|^.* )' + className + '( .*$|$)');
    return ((!!m) ? ((m[1] || '') + (m[2] || '')) : (original)).split('  ').join(' ').trim();
}

function toggleClass(original, className) {
    if (!original) return className.split('  ').join(' ').trim();
    var m = original.match('(^|^.* )' + className + '( .*$|$)');
    return ((!!m) ? ((m[1] || '') + (m[2] || '')) : (original + ' ' + className)).split('  ').join(' ').trim();
}

function closeDrawer() {
    var drawer = document.getElementById('nav-drawer');
    if (!!drawer) drawer.className = removeClass(drawer.className, 'visible');

    document.body.className = removeClass(document.body.className, 'js-nav-drawer');

    var hamburger = document.getElementById('header-menu-button');
    if (!!hamburger) hamburger.className = removeClass(hamburger.className, 'pressed');


    setTimeout(function () {
        window.animScrollToY(window.scrollYLast, function () {});
    }, 1000);
}

function openDrawer() {
    window.animScrollToY(0, function () {
        var drawer = document.getElementById('nav-drawer');
        if (!!drawer) drawer.className = addClass(drawer.className, 'visible');

        document.body.className = addClass(document.body.className, 'js-nav-drawer');

        var hamburger = document.getElementById('header-menu-button');
        if (!!hamburger) hamburger.className = addClass(hamburger.className, 'pressed');
    });
}

function toggleDrawer(event) {
    var drawer = document.getElementById('nav-drawer');
    if (!drawer) return;

    event.preventDefault();

    if (hasClass(drawer.className, 'visible')) {
        closeDrawer();
    } else {
        openDrawer();
    }
}

var lastVisibleId = '';
function updateLocation(doSwitch, targetName) {
    var sections = document.getElementsByClassName('site-section');
    for (var i = 0; i < sections.length; i++) {
        var section = sections[i];
        if (hasClass(section.className, 'visible')) lastVisibleId = section.id.substr('section-'.length);
        if (doSwitch && !hasClass(section.className, 'white')) section.className = addClass(removeClass(section.className, 'visible'), 'hidden');
    }

    var pathParts = location.pathname.split('/');
    var lastPart = pathParts.pop().split('.')[0] || 'index';
    var sectionName = ((!!targetName) ? (targetName.split('/').pop()) : (lastPart)) || 'index';

    var target = document.getElementById('section-' + sectionName);
    if (!!target) {
        if (doSwitch) {
            target.className = addClass(removeClass(target.className, 'hidden'), 'visible');
            if (sectionName !== lastPart) {
                window.history.pushState({}, 'Downloads | YU Play Dev', pathParts.join('/') + '/' + (sectionName === 'index' ? '' : sectionName));
                hasLocationUpdates = true;
            }
            window.scrollYLast = 0;
            closeDrawer();
        }
    } else {
        var client = new XMLHttpRequest();
        client.onreadystatechange = function () {
            if (client.readyState !== 4) return; // not complete

            var foobar = document.createElement('div');
            foobar.innerHTML = client.responseText;
            var newSections = foobar.getElementsByClassName('site-section');
            if (newSections.length > 0) {
                var node = document.importNode(newSections[0], true);
                node.className = addClass(removeClass(node.className, 'visible'), 'hidden');
                var existingNode = document.getElementById(node.id);
                if (!!existingNode) existingNode.parentElement.removeChild(existingNode);
                sections[0].parentNode.appendChild(node);
                setUpSections();
            }
            setTimeout(function () {
                if (doSwitch) {
                    target = document.getElementById('section-' + sectionName);
                    if (!!target) {
                        target.className = addClass(removeClass(target.className, 'hidden'), 'visible');
                    } else {
                        sectionName = lastVisibleId;
                        target = document.getElementById('section-' + sectionName);
                        if (!!target) target.className = addClass(removeClass(target.className, 'hidden'), 'visible');
                    }
                    if (sectionName !== lastPart) {
                        window.history.pushState({}, 'Paranoid Android – Official', pathParts.join('/') + '/' + (sectionName === 'index' ? '' : sectionName));
                        hasLocationUpdates = true;
                    }
                    window.scrollYLast = 0;
                    closeDrawer();
                }
            }, 1);
        };
        client.open('GET', '/' + sectionName + '.html', true);
        client.send();
        // TODO use a spinner
    }
}

// google analytics
var hasLocationUpdates = true;
setInterval(function () {
    if (!hasLocationUpdates) return;
    ga('send', 'pageview');
    hasLocationUpdates = false;
}, 1000);

function pressNavigationLink(event) {
    event.preventDefault();
    updateLocation(true, event.target.href);
    closeDrawer();
}

function getRecursiveTopOffset(element) {
    var topOffset = 0;

    while (element.offsetParent !== undefined && element.offsetParent !== null) {
        topOffset += element.offsetTop + (element.clientTop === null ? 0 : element.clientTop);
        element = element.offsetParent || {};
    }

    return topOffset;
}

function pressDownArrow(event) {
    event.preventDefault();

    var downarrow = document.getElementById('downarrow');
    if (!downarrow) return; // what the.

    var sectionScroll = downarrow.getAttribute('data-scroll-' + (location.pathname.split('/').pop().split('.')[0] || 'index'));
    if (!sectionScroll) return; // what the.

    var target = document.getElementById(sectionScroll);
    if (!target) return; // what the.

    window.animScrollToY(getRecursiveTopOffset(target), function () {});
}

var hasMoved = false;
function updateScroll(event) { hasMoved = true; }
setInterval(function () {
    if (!hasMoved) return;

    var downarrow = document.getElementById('downarrow');
    if (!!downarrow) {
        var isHidden = hasClass(downarrow.className, 'hidden');
        var hasSectionScroll = !!(downarrow.getAttribute('data-scroll-' + (location.pathname.split('/').pop().split('.')[0] || 'index')));
        if (window.scrollY > 100 || !hasSectionScroll) {
            if (!isHidden) {
                downarrow.className = addClass(downarrow.className, 'hidden');
            }
        } else {
            if (isHidden) {
                downarrow.className = removeClass(downarrow.className, 'hidden');
            }
        }
    }

    var targets = document.getElementsByClassName('js-animate-viewport');
    for (var i = 0; i < targets.length; i++) {
        var target = targets[i];
        var rect = target.getBoundingClientRect();
        var isAnimated = hasClass(target.className, 'animate');
        if (!isAnimated) {
            if (rect.top <= window.innerHeight && rect.left <= window.innerWidth) {
                target.className = addClass(target.className, 'animate');
            }
        } else {
            if (rect.left > window.innerWidth || rect.right < 0) {
                target.className = removeClass(target.className, 'animate');
            }
        }
    }

    hasMoved = false;
}, 1000 / 60);

function updatePopstate(event) { updateLocation(true); }

function setValue(element, className, value, modifiableField) {
    if (hasClass(element.className, className)) {
        if (!modifiableField) {
            var tag = element.tagName.toLowerCase();
            if (tag === 'img') return true; // abort
            if (tag === 'a' && value.substr(0, 4) === 'http') modifiableField = 'href';
            else modifiableField = 'innerHTML';
        }
        element[modifiableField] = value;
        return true;
    }

    var children = element.children;
    for (var child in children) {
        if (!children.hasOwnProperty(child)) continue;
        if (setValue(children[child], className, value, modifiableField)) return true;
    }

    return false;
}

function setUpSections() {
    var noscripts = document.getElementsByClassName('noscript');
    while (noscripts.length > 0) {
        for (var nsi = 0; nsi < noscripts.length; nsi++) {
            var noscript = noscripts[nsi];
            noscript.className = removeClass(noscript.className, 'noscript');
        }

        noscripts = document.getElementsByClassName('noscript');
    }

    var navigationLinks = document.getElementsByClassName('js-navigationlink');
    while (navigationLinks.length > 0) {
        for (var navi = 0; navi < navigationLinks.length; navi++) {
            var link = navigationLinks[navi];
            link.onclick = pressNavigationLink;
            link.className = removeClass(link.className, 'js-navigationlink');
        }

        navigationLinks = document.getElementsByClassName('js-navigationlink');
    }

    var memberSample = document.getElementById('team-member-sample');
    if (!!memberSample) {
        for (var person in people) {
            if (!people.hasOwnProperty(person)) continue;
            var info = people[person];

            var member = memberSample.cloneNode(true);
            member.className = removeClass(member.className, 'sample');
            member.id = '';

            for (var field in info) {
                if (!info.hasOwnProperty(field)) continue;
                setValue(member, field, info[field]);
            }

            setValue(member, 'name', person, 'innerHTML');
            setValue(member, 'profile', info.profile || '', 'src');

            memberSample.parentElement.appendChild(member);
        }
        memberSample.parentElement.removeChild(memberSample);
    }
}

$(document).ready(function () {
    var hamburger = document.getElementById('header-menu-button');
    if (!!hamburger) hamburger.onclick = toggleDrawer;

    var downarrow = document.getElementById('downarrow');
    if (!!downarrow) { downarrow.onclick = pressDownArrow; }

    setInterval(function () {
        var carousels = document.getElementsByClassName('carousel');
        for (var i = 0; i < carousels.length; i++) {
            var carousel = carousels[i];
            var images = carousel.children;

            // do nothing if the user has scrolled beyond the carousel
            if (window.scrollY > getRecursiveTopOffset(carousel) + jQuery(carousel).height() - 60) continue;

            var imageHidden = false;
            var imageDisplayed = false;

            for (var j = 0; j < images.length; j++) {
                if (imageDisplayed) break;

                var image = images[j];

                if (imageHidden) {
                    image.className = addClass(image.className, 'visible');
                    imageDisplayed = true;
                } else if (hasClass(image.className, 'visible')) {
                    image.className = removeClass(image.className, 'visible');
                    imageHidden = true;
                }
            }

            if (!imageDisplayed && images.length > 0) {
                var firstImage = images[0];
                firstImage.className = addClass(firstImage.className, 'visible');
                imageDisplayed = true;
            }
        }
    }, 5000);

    window.onscroll = updateScroll;
    window.onpopstate = updatePopstate;

    // force updates
    updateLocation(true);
    setUpSections();
    hasMoved = true;
    setTimeout(function () { hasMoved = true; }, 1500);
    setTimeout(function () { hasMoved = true; }, 3000);

    $(".search").on("keyup", function(event) {
        var text = $(this).val().toLowerCase();

        if (text == "") {
        	$(".panel").each(function () {
        		$(this).show();
        	})
        } else {
	        var notSelected = $(".panel-heading:has(h3)").filter(function() {
	            return $(this).find("h3").text().toLowerCase().indexOf(text) !== 0;
	        });
	        notSelected.parent().hide();
	        var selected = $(".panel-heading:has(h3)").filter(function() {
	            return $(this).find("h3").text().toLowerCase().indexOf(text) >= text;
	        });
	        selected.parent().parent().parent().show();
        }
    });
});

// google analytics
