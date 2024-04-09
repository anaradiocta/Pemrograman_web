<?php
$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Wisata",
        "subMenu" => [
          [
            "nama" => "Pantai"
          ],
          [
            "nama" => "Gunung"
          ]
        ]
      ],
      [
        "nama" => "Kuliner"
      ],
      [
        "nama" => "Hiburan"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kotak"
  ]
];

function tampilkanMenuBertingkat($menu, $level = 0) {
  if ($level === 0) {
    echo "<ul>";
  }

  foreach ($menu as $item) {
    if (isset($item['subMenu'])) {
      echo "<li>";
      echo $item['nama'];
      echo "<ul>";
      tampilkanMenuBertingkat($item['subMenu'], $level + 1);
      echo "</ul>";
      echo "</li>";
    } else {
      echo "<li>";
      echo $item['nama'];
      echo "</li>";
    }
  }

  if ($level === 0) {
    echo "</ul>";
  }
}

tampilkanMenuBertingkat($menu);
?>
