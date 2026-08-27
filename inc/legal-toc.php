<?php
/**
 * Legal document TOC sidebar + scroll spy.
 * Include once after .legal-content markup (or at end of main).
 * Expects: .legal-doc wrapper, #legal-toc-nav, .legal-content with h2/h3.
 */
?>
<style>
  .legal-toc-link {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    padding: 0.5rem 0.75rem;
    border-radius: 0.5rem;
    font-size: 0.875rem;
    line-height: 1.35;
    color: #434751;
    text-decoration: none;
    border-left: 2px solid transparent;
    transition: background-color .15s ease, color .15s ease, border-color .15s ease;
  }
  .legal-toc-link:hover {
    background: rgba(0, 68, 150, 0.06);
    color: #004496;
  }
  .legal-toc-link.is-active {
    background: rgba(0, 68, 150, 0.1);
    color: #004496;
    font-weight: 700;
    border-left-color: #004496;
  }
  .legal-toc-link.is-h3 {
    padding-left: 1.5rem;
    font-size: 0.8125rem;
  }
  html { scroll-behavior: smooth; }
  .legal-content h2,
  .legal-content h3 {
    scroll-margin-top: 6rem;
  }
</style>
<script>
(function () {
  var content = document.querySelector('.legal-content');
  var nav = document.getElementById('legal-toc-nav');
  var aside = document.getElementById('legal-toc');
  if (!content || !nav) return;

  var headings = Array.prototype.slice.call(content.querySelectorAll('h2, h3'));
  if (!headings.length) {
    if (aside) aside.classList.add('hidden');
    return;
  }

  function slugify(text) {
    return text.toLowerCase()
      .replace(/[^a-z0-9\s-]/g, '')
      .trim()
      .replace(/\s+/g, '-')
      .replace(/-+/g, '-') || 'section';
  }

  var used = {};
  headings.forEach(function (h, i) {
    if (!h.id) {
      var base = slugify(h.textContent || ('section-' + (i + 1)));
      var id = base;
      var n = 2;
      while (used[id] || document.getElementById(id)) {
        id = base + '-' + n++;
      }
      used[id] = true;
      h.id = id;
    }
    var a = document.createElement('a');
    a.href = '#' + h.id;
    a.className = 'legal-toc-link' + (h.tagName === 'H3' ? ' is-h3' : '');
    a.setAttribute('data-toc-target', h.id);
    a.textContent = (h.textContent || '').trim();
    a.addEventListener('click', function (e) {
      e.preventDefault();
      var target = document.getElementById(h.id);
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.replaceState(null, '', '#' + h.id);
    });
    nav.appendChild(a);
  });

  var links = Array.prototype.slice.call(nav.querySelectorAll('[data-toc-target]'));

  function setActive(id) {
    links.forEach(function (link) {
      link.classList.toggle('is-active', link.getAttribute('data-toc-target') === id);
    });
  }

  if ('IntersectionObserver' in window) {
    var visible = {};
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        visible[entry.target.id] = entry.isIntersecting;
      });
      var current = null;
      headings.forEach(function (h) {
        if (visible[h.id]) current = h.id;
      });
      if (current) setActive(current);
    }, {
      rootMargin: '-20% 0px -65% 0px',
      threshold: [0, 0.25, 1]
    });
    headings.forEach(function (h) { io.observe(h); });
    setActive(headings[0].id);
  } else {
    setActive(headings[0].id);
  }

  if (location.hash) {
    var hashId = location.hash.slice(1);
    var el = document.getElementById(hashId);
    if (el) {
      setTimeout(function () {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setActive(hashId);
      }, 100);
    }
  }
})();
</script>
