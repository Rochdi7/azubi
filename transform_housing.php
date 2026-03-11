<?php
$file = 'c:/Users/ASUS/Desktop/Projects/azubi/resources/views/frontoffice/pages/housing.blade.php';
$lines = file($file, FILE_IGNORE_NEW_LINES);

// Find key line numbers (0-indexed)
$mainStartLine = null;
$mainEndLine = null;
$footerStartLine = null;

foreach ($lines as $i => $line) {
    if (strpos($line, '<main class="flex-1 max-w-full">') !== false) {
        $mainStartLine = $i;
    }
    if (trim($line) === '</main>') {
        $mainEndLine = $i;
    }
    if (strpos($line, '<footer') !== false) {
        $footerStartLine = $i;
    }
}

// Content is between mainStartLine+1 and mainEndLine-1
// But we want the inner content of main (excluding the main tags themselves)
$contentLines = array_slice($lines, $mainStartLine + 1, $mainEndLine - $mainStartLine - 1);

// Join content
$content = implode("\n", $contentLines);

// Fix src="_next/ paths
$content = preg_replace(
    '/src="_next\/([^"]+)"/',
    'src="{{ asset(\'assets/_next/$1\') }}"',
    $content
);

// Fix href="_next/ paths
$content = preg_replace(
    '/href="_next\/([^"]+)"/',
    'href="{{ asset(\'assets/_next/$1\') }}"',
    $content
);

// Build the Blade template
$blade = '@extends(\'frontoffice.layouts.app\')

@section(\'title\', \'Ausbildung Housing Germany: €250-450/Month (2026 Guide) | GoAusbildung\')

@section(\'meta\')
    <meta name="description" content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta name="keywords" content="ausbildung housing germany,student accommodation germany,wg shared flat germany,student dorm germany,rent germany ausbildung,housing costs germany" />
    <meta property="og:title" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta property="og:description" content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta property="og:url" content="https://goausbildung.com/housing" />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/housing.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@goausbildung" />
    <meta name="twitter:creator" content="@goausbildung" />
    <meta name="twitter:title" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta name="twitter:description" content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <link rel="canonical" href="{{ url(\'/housing\') }}" />
@endsection

@section(\'content\')
' . $content . '
@endsection

@push(\'scripts\')
    <script src="{{ asset(\'assets/js/script.js\') }}"></script>
@endpush
';

file_put_contents($file, $blade);
echo "Done! Main start: $mainStartLine, Main end: $mainEndLine, Footer: $footerStartLine\n";
echo "Content lines: " . count($contentLines) . "\n";
