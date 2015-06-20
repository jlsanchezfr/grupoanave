v0.12.3 (unreleased)
----------------------
* **[qt]** upgrade the patched Qt to v4.8.7
* removed support for CentOS 5 builds
* update OpenSSL to 1.0.2a and xz to 5.2.1
* downgrade libpng to 1.2.53
* **#1843**: add --keep-relative-links and --resolve-relative-links to resolve relative links
* **#2104**: renamed COPYING to LICENSE
* **#2190**: do not depend on ICU even if it is already installed
* **#2194**: **[qt]** fix debugging of Qt/WebKit due to missing debug information
* **#2280**: do not allow data URIs for --header-html or --footer-html
* **#2322**: fix broken debug builds with MSVC
* **#2355**: add support for proxy bypass for specific hosts with --bypass-proxy-for

v0.12.2.1 (2015-01-19)
----------------------
* update OpenSSL to 1.0.1l
* **#2084**: **[qt]** make background transparent by default when rendering to PDF
* **#2142**: fix wkhtmltoimage ignoring --javascript-delay and --window-status
* **#2151**: **[qt]** fix PDFs rendering without embedded fonts on 64-bit Cocoa build

v0.12.2 (2015-01-09)
--------------------
* external libraries updated: OpenSSL to 1.0.1k, libpng to 1.5.21 and xz to 5.2.0
* fix build failure with unpatched Qt >= 5.3
* **#1539**: **[qt]** using OpenType fonts now results in selectable text on Windows
* **#1638**: **[qt]** fix incorrect rendering of JPEG images on Windows Server 2008 x64
* **#1639**: block access to local files on Windows when an invalid URL is used
* **#1640**: **[qt]** make table page-break logic opt-in via CSS at the row level
* **#1676**: do not allow overriding the header/footer settings for cover pages
* **#1676**: set page margins correctly via computed header/footer heights for multiple URLs
* **#1758**: fix corrupt image when output is specified as "-" in wkhtmltoimage on Windows
* **#1722**: **[qt]** fix broken hyphenation with soft-hyphens
* **#1769**: fixed unicode URLs in links
* **#1772**: added variable 'isodate' for substitution in headers/footers
* **#1790**: fix handling of temporary files during PDF conversion via API
* **#1808**: fix [sitepage] and [sitepages] not working without HTML headers/footers
* **#1825**: fix handling of non-ASCII characters in command-line arguments
* **#1863**: **[qt]** blank page or crash with low DPI on Windows
* **#1892**: --window-status causes endless loop with --header-html
* **#1906**: fix wrong comparison when parsing list parameters
* **#1944**: **[breaking change]** fix the reflection subsystem to fix the non-functional API
* **#1949**: fix generation of tarball in the posix-local build
* **#1955**: installer does not work on 32-bit OS X (10.6.x or 10.7.x)
* **#1961**: add explicit dependency on minimal font packages for all linux targets
* **#1988**: fix footer spacing being ignored (and header spacing being used instead)
* **#1992**: add support for CentOS 7 target
* **#2055**: **[qt]** rendering of Thai symbols is very slow

v0.12.1 (2014-06-26)
--------------------
* removed support for PostScript output which is not supported in QT5
* use OpenSSL 1.0.1h for the Windows builds
* **#1502**: fix spurious "exit with code 1 due to http error: 1xxx" errors
* **#1504**: **[qt]** fix rendering issues for JPEG with XMP metadata
* **#1507**: **[qt]** fix crash when CSS widows are specified
* **#1509**: fix TOC support which was broken after upgrade to latest Qt
* **#1512**: **[qt]** fix crashes when rendering JPEG images on Windows Server 2008 x64
* **#1544**: use UTF-8 encoding for the HTML generated by the TOC XSL
* **#1545**: PDFs rendering without embedded fonts on OS X
* **#1546**: fix problem with non-ASCII characters in output path on Windows
* **#1585**: delete existing files explicitly in windows installer
* **#1586**: **[qt]** suppress blank page generated if the first cell spans multiple pages
* **#1631**: **[qt]** crash when hiding header for a specific page
* **#1686**: **[qt]** --user-style-sheet does not work on Windows
* **#1757**: fix parsing of ColorMode and PrinterMode in the API
* **#1764**: include text codecs for Chinese (Simplified/Traditional), Japanese and Korean
* fix compilation failures when not building with patched Qt/WebKit
* support building with non-patched Qt4/Qt5 in either shared or static mode
* implement a --license command line option
* update URLs in the internal documentation
* generate API documentation for libwkhtmltox (on the website)
* display version in compiled binary properly under various scenarios
* complete revamp of the build system, which now generates native packages on all platforms

v0.12.0 (2014-02-06)
--------------------
* **#443**: add "sitepage" and "sitepages" support for headers
* **#175**: add ability to auto calculate header/footer heights
* **#1086**: don't return freed memory; instead use a string cache
* **#648**: delete infinite warnings into console about window status
* **#550**: enable tunneling to use a HTTP proxy for HTTPS
* **#1277**: avoid crash due to premature deletion of ResourceObject
* lots of fixes/enhancements for memory and error management
* add *--quiet* option to wkhtmltoimage
* add *--cache-dir* option for configuring web cache directory
* add *--load-media-error-handling* to handle errors for media files
* add *--viewport-size* to specify viewport size
* reserve heights when not using HTML header/footer
* lots of improvements in the build system
* lots of typos were fixed in various places
* **[qt]** rebase patch series on QT 4.8.5 (now hosted on github)
* **[qt]** fixes to get static builds working for MSVC 2010 (32/64 bit)
* **[qt]** prevent page breaks in table rows
* **[qt]** repeat THEAD/TFOOT when table contains page breaks
* **[qt]** improve font kerning as per Webkit bug 93263
* **[qt]** various table page-break improvements
* **[qt]** fix rendering due to incorrect page height computation
* **[qt]** implement "page-break-inside: avoid" for non-floating block elements
* **[qt]** enable WOFF file support
* **[qt]** add support for CSS widows and orphans for block elements