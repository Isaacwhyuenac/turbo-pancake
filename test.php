<?php

$data = '{"product":{"id":1962026532923,"title":"Testing Product","body_html":"","vendor":"OTL","product_type":"","created_at":"2018-12-04T00:52:56-05:00","handle":"testing-product","updated_at":"2020-01-10T04:29:45-05:00","published_at":"2018-12-04T00:52:25-05:00","template_suffix":"","published_scope":"global","tags":"","admin_graphql_api_id":"gid:\/\/shopify\/Product\/1962026532923","variants":[{"id":19421906075707,"product_id":1962026532923,"title":"Default Title","price":"98.20","sku":"","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":"shopify","option1":"Default Title","option2":null,"option3":null,"created_at":"2018-12-04T00:52:56-05:00","updated_at":"2020-01-10T04:29:45-05:00","taxable":false,"barcode":"","grams":0,"image_id":null,"weight":0.0,"weight_unit":"kg","inventory_item_id":19764182057019,"inventory_quantity":-1,"old_inventory_quantity":-1,"requires_shipping":false,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/19421906075707"}],"options":[{"id":2729921445947,"product_id":1962026532923,"name":"Title","position":1,"values":["Default Title"]}],"images":[],"image":null}}';


$character = json_decode($data);
var_dump($character);
echo $character -> name;