<?php
// Name comparison function
function name_cmp($p1, $p2)
{
  // use the built-in string comparison
  return strcmp($p1['name'], $p2['name']);
}

// Price comparison function
function price_cmp($p1, $p2)
{
  return (int)$p1['price'] - (int)$p2['price'];
}

// Created_time comparison function
function created_time_cmp($p1, $p2)
{
  // Convert date/time string to Unix timestamp
  return strtotime($p1['created_time']) - strtotime($p2['created_time']);
}

// Available sizes comparison function
function avai_sizes_cmp($p1, $p2)
{
  // prevent calling count() on non-array object
  // by assigning an empty array if needed
  if (!is_array($p1['sizes'])) {
    $p1['sizes'] = [];
  }
  if (!is_array($p2['sizes'])) {
    $p2['sizes'] = [];
  }

  return count($p1['sizes']) - count($p2['sizes']);
}

session_start();

// mapping from selected values to comparison function names
$mapping = [
  'name' => 'name_cmp',
  'price' => 'price_cmp',
  'created_time' => 'created_time_cmp',
  'sizes' => 'avai_sizes_cmp',
];

// by default: use name_cmp
$selected_func = 'name_cmp';
if (isset($_GET['compare_by']) && !empty($_GET['compare_by'])) {
  if (array_key_exists($_GET['compare_by'], $mapping)) {
    $selected_func = $mapping[$_GET['compare_by']];
  }
}

usort($_SESSION['products'], $selected_func);
echo '<pre>';
print_r($_SESSION['products']);
echo '</pre>';
