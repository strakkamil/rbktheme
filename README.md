# RBK Theme

Autorski motyw WordPress dla strony **RBK Events - Michał Robak** (akordeonista, oprawa muzyczna wydarzeń).

## Wymagania

- WordPress 6.x+
- PHP 8.0+

## Instalacja

1. Skopiuj katalog `rbkevents` do `wp-content/themes/` instalacji WordPress.
2. W panelu admina przejdź do **Wygląd → Motywy** i aktywuj **RBK Theme**.
3. W **Ustawienia → Bezpośrednie odnośniki** ustaw strukturę permalinków na `/%postname%/`
   (motyw zakłada "ładne" adresy URL).

## Funkcje motywu

- wsparcie dla `title-tag`, miniaturek wpisów (`post-thumbnails`) oraz ikony strony (`site-icon`)
- własne style i skrypty (`assets/css`, `assets/js`) wczytywane przez `functions.php`
- dedykowany styl dla strony błędu 404
- licznik czasu czytania artykułu (`reading_time()`)
- paginacja listy wpisów (`rbk_pagination()`)
- baner zgody na cookies z zapisem preferencji (marketingowe / statystyczne)

## Struktura plików

| Plik / katalog       | Opis                                                              |
| --------------------- | ------------------------------------------------------------------ |
| `header.php`           | Nagłówek strony - meta, logo, menu główne                          |
| `footer.php`           | Stopka - dane kontaktowe, social media, polityka prywatności       |
| `index.php`            | Strona główna bloga - lista wpisów                                 |
| `single.php`           | Widok pojedynczego wpisu                                            |
| `404.php`              | Strona błędu 404                                                    |
| `hero.php`             | Komponent sekcji hero (obraz + nagłówek)                            |
| `card.php`             | Karta wpisu na liście / w sekcji "ostatnie posty"                   |
| `cookies.php`          | Baner i ustawienia zgody na pliki cookies                           |
| `functions.php`        | Konfiguracja motywu, rejestracja stylów/skryptów, funkcje pomocnicze |
| `style.css`            | Główny arkusz stylów motywu (wraz z nagłówkiem definicji motywu)    |
| `assets/css/`          | Dodatkowe style (blog, 404)                                         |
| `assets/js/`           | Skrypty (nawigacja mobilna, obsługa cookies)                        |
| `assets/fonts/`        | Czcionki Montserrat (woff/woff2)                                    |
| `assets/images/`       | Ikony i grafiki motywu                                              |

## Linki nawigacyjne

Linki w menu głównym i stopce (np. "O mnie", "Oferta", "Blog", "Polityka prywatności")
generowane są za pomocą `home_url()`, dzięki czemu poprawnie działają niezależnie od
domeny i protokołu skonfigurowanego w WordPressie.

## Autor

Kamil Strąk - [strakkamil/rbktheme](https://github.com/strakkamil/rbktheme)
