// forces IE to cache background images, need this for background image swap (even for sprited images)
try {
    document.execCommand('BackgroundImageCache', false, true);
} catch(err) { }

// frames are bad, and break paypal
if (window != top) {
    top.location.href = location.href;
}