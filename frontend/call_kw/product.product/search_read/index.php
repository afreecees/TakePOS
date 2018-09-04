<?php
header('Content-Type: application/json');
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
?>
{"result": [{"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 700.0, "standard_price": 700.0, "lst_price": 700.0, "default_code": "AT", "id": 47, "description_sale": false, "display_name": "Air Flight", "description": false, "tracking": "none", "product_tmpl_id": [43, "[AT] Air Flight"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2000.0, "standard_price": 10000.0, "lst_price": 2000.0, "default_code": "BFR001", "id": 57, "description_sale": false, "display_name": "Space Rocket", "description": "Self built rocket (no warranty)", "tracking": "none", "product_tmpl_id": [53, "[BFR001] Space Rocket"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 1000.0, "standard_price": 3000.0, "lst_price": 1000.0, "default_code": "BFR002", "id": 58, "description_sale": false, "display_name": "Space Launch System", "description": "Provide a way to launch your rocket into space", "tracking": "none", "product_tmpl_id": [54, "[BFR002] Space Launch System"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 1000.0, "standard_price": 3000.0, "lst_price": 1000.0, "default_code": "BFR003", "id": 59, "description_sale": false, "display_name": "Space Shuttle System", "description": "Built by the best engineer", "tracking": "none", "product_tmpl_id": [55, "[BFR003] Space Shuttle System"], "to_weight": false}, {"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [9, "km"], "list_price": 0.5, "standard_price": 0.32, "lst_price": 0.5, "default_code": "CarTRA", "id": 46, "description_sale": false, "display_name": "Car Travel Expenses", "description": false, "tracking": "none", "product_tmpl_id": [42, "[CarTRA] Car Travel Expenses"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 147.0, "standard_price": 600.0, "lst_price": 147.0, "default_code": "E-COM92", "id": 51, "description_sale": false, "display_name": "Self Build Kit", "description": "Self Build kit.", "tracking": "none", "product_tmpl_id": [47, "[E-COM92] Self Build Kit"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2250.0, "standard_price": 2000.0, "lst_price": 2250.0, "default_code": "E-COM93", "id": 60, "description_sale": false, "display_name": "Laptop Charger", "description": "19v,5.5 x 2.5 mm Pin Type Adapter (Power Cord Included)", "tracking": "lot", "product_tmpl_id": [56, "[E-COM93] Laptop Charger"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 850.0, "standard_price": 800.0, "lst_price": 850.0, "default_code": "E-COM94", "id": 61, "description_sale": false, "display_name": "Laptop Keypad", "description": "New Original Laptop Keyboard Part No 9GT99", "tracking": "lot", "product_tmpl_id": [57, "[E-COM94] Laptop Keypad"], "to_weight": false}, {"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 0.0, "standard_price": 1.0, "lst_price": 0.0, "default_code": "EXP", "id": 45, "description_sale": false, "display_name": "Expenses", "description": false, "tracking": "none", "product_tmpl_id": [41, "[EXP] Expenses"], "to_weight": false}, {"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 14.0, "standard_price": 8.0, "lst_price": 14.0, "default_code": "EXP", "id": 1, "description_sale": false, "display_name": "General Expense", "description": false, "tracking": "none", "product_tmpl_id": [1, "[EXP] General Expense"], "to_weight": false}, {"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [5, "Day(s)"], "list_price": 400.0, "standard_price": 400.0, "lst_price": 400.0, "default_code": "EXP", "id": 2, "description_sale": false, "display_name": "Hotel Accommodation", "description": false, "tracking": "none", "product_tmpl_id": [2, "[EXP] Hotel Accommodation"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2250.0, "standard_price": 2500.0, "lst_price": 2250.0, "default_code": "FURN001", "id": 52, "description_sale": false, "display_name": "Table", "description": "Solid wood table.", "tracking": "none", "product_tmpl_id": [48, "[FURN001] Table"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2000.0, "standard_price": 2000.0, "lst_price": 2000.0, "default_code": "FURN002", "id": 53, "description_sale": false, "display_name": "Table Head", "description": "Solid wood is a durable natural material.", "tracking": "serial", "product_tmpl_id": [49, "[FURN002] Table Head"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 50.0, "standard_price": 50.0, "lst_price": 50.0, "default_code": "FURN003", "id": 54, "description_sale": false, "display_name": "Table Leg", "description": "18\u2033 x 2\u00bd\u2033 Square Leg", "tracking": "lot", "product_tmpl_id": [50, "[FURN003] Table Leg"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 12.5, "standard_price": 12.5, "lst_price": 12.5, "default_code": "FURN004", "id": 55, "description_sale": false, "display_name": "Bolt", "description": "Stainless steel screw full (dia - 5mm, Length - 10mm)", "tracking": "none", "product_tmpl_id": [51, "[FURN004] Bolt"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 10.0, "standard_price": 10.0, "lst_price": 10.0, "default_code": "FURN005", "id": 56, "description_sale": false, "display_name": "Screw", "description": "Stainless steel screw", "tracking": "none", "product_tmpl_id": [52, "[FURN005] Screw"], "to_weight": false}, {"categ_id": [3, "All / Expenses"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [5, "Day(s)"], "list_price": 400.0, "standard_price": 400.0, "lst_price": 400.0, "default_code": "HA0", "id": 48, "description_sale": false, "display_name": "Hotel Accommodation", "description": false, "tracking": "none", "product_tmpl_id": [44, "[HA0] Hotel Accommodation"], "to_weight": false}, {"categ_id": [7, "All / Saleable / Physical"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 1250.0, "standard_price": 1100.0, "lst_price": 1250.0, "default_code": "HDD-DEM", "id": 50, "description_sale": false, "display_name": "HDD on Demand", "description": "On demand hard-disk having capacity based on requirement.", "tracking": "none", "product_tmpl_id": [46, "[HDD-DEM] HDD on Demand"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 18.0, "standard_price": 13.0, "lst_price": 18.0, "default_code": "MISC", "id": 64, "description_sale": false, "display_name": "Miscellaneous", "description": false, "tracking": "none", "product_tmpl_id": [60, "[MISC] Miscellaneous"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 750000.0, "standard_price": 0.0, "lst_price": 750000.0, "default_code": "QF11", "id": 111, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better functional understanding of Odoo", "display_name": "Functional Training", "description": false, "tracking": "none", "product_tmpl_id": [106, "Functional Training"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 0.0, "standard_price": 0.0, "lst_price": 0.0, "default_code": "QF12", "id": 113, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better technical understanding of Odoo", "display_name": "Technical Training", "description": false, "tracking": "none", "product_tmpl_id": [107, "Technical Training"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 750000.0, "standard_price": 0.0, "lst_price": 750000.0, "default_code": "QF13", "id": 115, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better functional understanding of Odoo", "display_name": "Advanced CRM Functional", "description": false, "tracking": "none", "product_tmpl_id": [108, "Advanced CRM Functional"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 180.0, "standard_price": 160.0, "lst_price": 180.0, "default_code": "SERV_COST", "id": 5, "description_sale": false, "display_name": "External Audit", "description": "Example of products to invoice based on cost.", "tracking": "none", "product_tmpl_id": [5, "[SERV_COST] External Audit"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [6, "Hour(s)"], "list_price": 90.0, "standard_price": 40.0, "lst_price": 90.0, "default_code": "SERV_ORDER", "id": 3, "description_sale": false, "display_name": "Prepaid Consulting", "description": "Example of product to invoice on order.", "tracking": "none", "product_tmpl_id": [3, "[SERV_ORDER] Prepaid Consulting"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 88, "description_sale": false, "display_name": "Acsone.eu", "description": false, "tracking": "none", "product_tmpl_id": [84, "Acsone.eu"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 750000.0, "standard_price": 50000.0, "lst_price": 750000.0, "default_code": false, "id": 114, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better functional understanding of Odoo", "display_name": "Advanced CRM Functional", "description": false, "tracking": "none", "product_tmpl_id": [108, "Advanced CRM Functional"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [6, "Hour(s)"], "list_price": 1.0, "standard_price": 0.1, "lst_price": 1.0, "default_code": false, "id": 49, "description_sale": false, "display_name": "Assembly Service Cost", "description": false, "tracking": "none", "product_tmpl_id": [45, "Assembly Service Cost"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 4.8, "standard_price": 0.0, "lst_price": 4.8, "default_code": false, "id": 75, "description_sale": false, "display_name": "Black Grapes", "description": false, "tracking": "none", "product_tmpl_id": [71, "Black Grapes"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": "2100002000003", "taxes_id": [], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.98, "standard_price": 0.0, "lst_price": 1.98, "default_code": false, "id": 65, "description_sale": false, "display_name": "Boni Oranges", "description": false, "tracking": "none", "product_tmpl_id": [61, "Boni Oranges"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 0.9, "standard_price": 0.0, "lst_price": 0.9, "default_code": false, "id": 78, "description_sale": false, "display_name": "Carrots", "description": false, "tracking": "none", "product_tmpl_id": [74, "Carrots"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 16.5, "standard_price": 14.0, "lst_price": 16.5, "default_code": false, "id": 27, "description_sale": false, "display_name": "Cleaning", "description": false, "tracking": "none", "product_tmpl_id": [23, "Cleaning"], "to_weight": false}, {"categ_id": [2, "All / Saleable"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2500.0, "standard_price": 1000.0, "lst_price": 2500.0, "default_code": false, "id": 96, "description_sale": false, "display_name": "Conference on Business Applications", "description": false, "tracking": "none", "product_tmpl_id": [92, "Conference on Business Applications"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.7, "standard_price": 0.0, "lst_price": 1.7, "default_code": false, "id": 73, "description_sale": false, "display_name": "Conference pears", "description": false, "tracking": "none", "product_tmpl_id": [69, "Conference pears"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [20, "Month(s)"], "list_price": 0.0, "standard_price": 0.0, "lst_price": 0.0, "default_code": false, "id": 102, "description_sale": "Custom Domain\n        Access your Odoo Instance using your own domain.", "display_name": "Custom Domain", "description": false, "tracking": "none", "product_tmpl_id": [98, "Custom Domain"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [21, "Year(s)"], "list_price": 0.0, "standard_price": 0.0, "lst_price": 0.0, "default_code": false, "id": 105, "description_sale": "Custom Domain\n        Access your Odoo Instance using your own domain.", "display_name": "Custom Domain (Yearly)", "description": false, "tracking": "none", "product_tmpl_id": [101, "Custom Domain (Yearly)"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [20, "Month(s)"], "list_price": 40.0, "standard_price": 0.0, "lst_price": 40.0, "default_code": false, "id": 101, "description_sale": "Customized Module\n        Customize a module to better match your business process.", "display_name": "Customized Module", "description": false, "tracking": "none", "product_tmpl_id": [97, "Customized Module"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [21, "Year(s)"], "list_price": 400.0, "standard_price": 0.0, "lst_price": 400.0, "default_code": false, "id": 104, "description_sale": "Customized Module\n        Customize a module to better match your business process.", "display_name": "Customized Module (Yearly)", "description": false, "tracking": "none", "product_tmpl_id": [100, "Customized Module (Yearly)"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [20, "Month(s)"], "list_price": 10.0, "standard_price": 0.0, "lst_price": 10.0, "default_code": false, "id": 100, "description_sale": "Customized View\n        Customize one or more views (in a single module) to better suit your needs.", "display_name": "Customized Views", "description": false, "tracking": "none", "product_tmpl_id": [96, "Customized Views"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [21, "Year(s)"], "list_price": 100.0, "standard_price": 0.0, "lst_price": 100.0, "default_code": false, "id": 103, "description_sale": "Customized View\n        Customize one or more views (in a single module) to better suit your needs.", "display_name": "Customized Views (Yearly)", "description": false, "tracking": "none", "product_tmpl_id": [99, "Customized Views (Yearly)"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 90, "description_sale": false, "display_name": "Datalp.com", "description": false, "tracking": "none", "product_tmpl_id": [86, "Datalp.com"], "to_weight": false}, {"categ_id": [2, "All / Saleable"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 150.0, "standard_price": 100.0, "lst_price": 150.0, "default_code": false, "id": 62, "description_sale": false, "display_name": "Deposit", "description": false, "tracking": "none", "product_tmpl_id": [58, "Deposit"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 92, "description_sale": false, "display_name": "EGGS-solutions.fr", "description": false, "tracking": "none", "product_tmpl_id": [88, "EGGS-solutions.fr"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 86, "description_sale": false, "display_name": "Eezee-It", "description": false, "tracking": "none", "product_tmpl_id": [82, "Eezee-It"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 87, "description_sale": false, "display_name": "Ekomurz.nl", "description": false, "tracking": "none", "product_tmpl_id": [83, "Ekomurz.nl"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 10.0, "standard_price": 30.0, "lst_price": 10.0, "default_code": false, "id": 93, "description_sale": false, "display_name": "Event Registration", "description": false, "tracking": "none", "product_tmpl_id": [89, "Event Registration"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 2.2, "standard_price": 0.0, "lst_price": 2.2, "default_code": false, "id": 77, "description_sale": false, "display_name": "Extra Flandria chicory", "description": false, "tracking": "none", "product_tmpl_id": [73, "Extra Flandria chicory"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 750000.0, "standard_price": 50000.0, "lst_price": 750000.0, "default_code": false, "id": 110, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better functional understanding of Odoo", "display_name": "Functional Training", "description": false, "tracking": "none", "product_tmpl_id": [106, "Functional Training"], "to_weight": false}, {"categ_id": [2, "All / Saleable"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2500.0, "standard_price": 1000.0, "lst_price": 2500.0, "default_code": false, "id": 95, "description_sale": false, "display_name": "Functional Webinar", "description": false, "tracking": "none", "product_tmpl_id": [91, "Functional Webinar"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.69, "standard_price": 0.0, "lst_price": 1.69, "default_code": false, "id": 72, "description_sale": false, "display_name": "Golden Apples Perlim", "description": false, "tracking": "none", "product_tmpl_id": [68, "Golden Apples Perlim"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 2.09, "standard_price": 0.0, "lst_price": 2.09, "default_code": false, "id": 70, "description_sale": false, "display_name": "Granny Smith apples", "description": false, "tracking": "none", "product_tmpl_id": [66, "Granny Smith apples"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 3.0, "standard_price": 0.0, "lst_price": 3.0, "default_code": false, "id": 82, "description_sale": false, "display_name": "Green Peppers", "description": false, "tracking": "none", "product_tmpl_id": [78, "Green Peppers"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.9, "standard_price": 0.0, "lst_price": 1.9000000000000001, "default_code": false, "id": 79, "description_sale": false, "display_name": "In Cluster Tomatoes", "description": false, "tracking": "none", "product_tmpl_id": [75, "In Cluster Tomatoes"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.1, "standard_price": 0.0, "lst_price": 1.1, "default_code": false, "id": 71, "description_sale": false, "display_name": "Jonagold apples", "description": false, "tracking": "none", "product_tmpl_id": [67, "Jonagold apples"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [6, "Hour(s)"], "list_price": 100.0, "standard_price": 85.0, "lst_price": 100.0, "default_code": false, "id": 108, "description_sale": false, "display_name": "Junior Developer (Invoice on Timesheets)", "description": false, "tracking": "none", "product_tmpl_id": [104, "Junior Developer (Invoice on Timesheets)"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 2.29, "standard_price": 0.0, "lst_price": 2.29, "default_code": false, "id": 84, "description_sale": false, "display_name": "Leeks", "description": false, "tracking": "none", "product_tmpl_id": [80, "Leeks"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": "2301000000006", "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.98, "standard_price": 0.0, "lst_price": 1.98, "default_code": false, "id": 67, "description_sale": false, "display_name": "Lemon", "description": false, "tracking": "none", "product_tmpl_id": [63, "Lemon"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 500.0, "standard_price": 420.0, "lst_price": 500.0, "default_code": false, "id": 109, "description_sale": false, "display_name": "Milestones", "description": false, "tracking": "none", "product_tmpl_id": [105, "Milestones"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [21, "Year(s)"], "list_price": 200.0, "standard_price": 0.0, "lst_price": 200.0, "default_code": false, "id": 99, "description_sale": "Odoo SAAS\n        Access to your Odoo Instance. Stored on our servers: high speed, high reliability and daily backups.", "display_name": "Odoo SAAS (Yearly)", "description": false, "tracking": "none", "product_tmpl_id": [95, "Odoo SAAS (Yearly)"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": "2100001000004", "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.28, "standard_price": 0.0, "lst_price": 1.28, "default_code": false, "id": 80, "description_sale": false, "display_name": "Onions", "description": false, "tracking": "none", "product_tmpl_id": [76, "Onions"], "to_weight": true}, {"categ_id": [2, "All / Saleable"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2500.0, "standard_price": 1000.0, "lst_price": 2500.0, "default_code": false, "id": 94, "description_sale": false, "display_name": "Open Days in Los Angeles", "description": false, "tracking": "none", "product_tmpl_id": [90, "Open Days in Los Angeles"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 2.83, "standard_price": 0.0, "lst_price": 2.83, "default_code": false, "id": 66, "description_sale": false, "display_name": "Orange Butterfly", "description": false, "tracking": "none", "product_tmpl_id": [62, "Orange Butterfly"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 147.0, "standard_price": 600.0, "lst_price": 147.0, "default_code": false, "id": 18, "description_sale": false, "display_name": "Parts Replacement", "description": false, "tracking": "none", "product_tmpl_id": [15, "Parts Replacement"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": "2300001000008", "taxes_id": [], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 5.1, "standard_price": 0.0, "lst_price": 5.1000000000000005, "default_code": false, "id": 74, "description_sale": false, "display_name": "Peaches", "description": false, "tracking": "none", "product_tmpl_id": [70, "Peaches"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.39, "standard_price": 0.0, "lst_price": 1.3900000000000001, "default_code": false, "id": 76, "description_sale": false, "display_name": "Potatoes", "description": false, "tracking": "none", "product_tmpl_id": [72, "Potatoes"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 3.1, "standard_price": 0.0, "lst_price": 3.1, "default_code": false, "id": 81, "description_sale": false, "display_name": "Red Pepper", "description": false, "tracking": "none", "product_tmpl_id": [77, "Red Pepper"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.98, "standard_price": 0.0, "lst_price": 1.98, "default_code": false, "id": 69, "description_sale": false, "display_name": "Red grapefruit", "description": false, "tracking": "none", "product_tmpl_id": [65, "Red grapefruit"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 320.0, "standard_price": 800.0, "lst_price": 320.0, "default_code": false, "id": 20, "description_sale": false, "display_name": "Repair", "description": false, "tracking": "none", "product_tmpl_id": [17, "Repair"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [6, "Hour(s)"], "list_price": 200.0, "standard_price": 150.0, "lst_price": 200.0, "default_code": false, "id": 107, "description_sale": false, "display_name": "Senior Developer (Invoice on Timesheets)", "description": false, "tracking": "none", "product_tmpl_id": [103, "Senior Developer (Invoice on Timesheets)"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 3.19, "standard_price": 0.0, "lst_price": 3.19, "default_code": false, "id": 68, "description_sale": false, "display_name": "Stringers", "description": false, "tracking": "none", "product_tmpl_id": [64, "Stringers"], "to_weight": true}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [6, "Hour(s)"], "list_price": 250.0, "standard_price": 190.0, "lst_price": 250.0, "default_code": false, "id": 106, "description_sale": false, "display_name": "Support (Prepaid Hours)", "description": false, "tracking": "none", "product_tmpl_id": [102, "Support (Prepaid Hours)"], "to_weight": false}, {"categ_id": [2, "All / Saleable"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 2500.0, "standard_price": 1000.0, "lst_price": 2500.0, "default_code": false, "id": 97, "description_sale": false, "display_name": "Technical Training", "description": false, "tracking": "none", "product_tmpl_id": [93, "Technical Training"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 0.0, "standard_price": 50000.0, "lst_price": 0.0, "default_code": false, "id": 112, "description_sale": "Learn directly from our team and network of Odoo experts. Choose from the available training sessions for a better technical understanding of Odoo", "display_name": "Technical Training", "description": false, "tracking": "none", "product_tmpl_id": [107, "Technical Training"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 1.0, "standard_price": 0.0, "lst_price": 1.0, "default_code": false, "id": 63, "description_sale": false, "display_name": "Tips", "description": false, "tracking": "none", "product_tmpl_id": [59, "Tips"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 89, "description_sale": false, "display_name": "Vauxoo.com", "description": false, "tracking": "none", "product_tmpl_id": [85, "Vauxoo.com"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [], "pos_categ_id": false, "uom_id": [1, "Unit(s)"], "list_price": 1.0, "standard_price": 0.0, "lst_price": 1.0, "default_code": false, "id": 44, "description_sale": false, "display_name": "Whiteboard", "description": false, "tracking": "none", "product_tmpl_id": [40, "Whiteboard"], "to_weight": false}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 2.7, "standard_price": 0.0, "lst_price": 2.7, "default_code": false, "id": 83, "description_sale": false, "display_name": "Yellow Peppers", "description": false, "tracking": "none", "product_tmpl_id": [79, "Yellow Peppers"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [1, "Fruits and Vegetables"], "uom_id": [3, "kg"], "list_price": 1.2, "standard_price": 0.0, "lst_price": 1.2, "default_code": false, "id": 85, "description_sale": false, "display_name": "Zucchini", "description": false, "tracking": "none", "product_tmpl_id": [81, "Zucchini"], "to_weight": true}, {"categ_id": [1, "All"], "barcode": false, "taxes_id": [1], "pos_categ_id": [2, "Partner Services"], "uom_id": [1, "Unit(s)"], "list_price": 999.99, "standard_price": 0.0, "lst_price": 999.99, "default_code": false, "id": 91, "description_sale": false, "display_name": "camptocamp.com", "description": false, "tracking": "none", "product_tmpl_id": [87, "camptocamp.com"], "to_weight": false}, {"categ_id": [5, "All / Saleable / Services"], "barcode": false, "taxes_id": [1], "pos_categ_id": false, "uom_id": [20, "Month(s)"], "list_price": 200.0, "standard_price": 0.0, "lst_price": 200.0, "default_code": false, "id": 98, "description_sale": "Odoo Custom Module\n        A custom module tailored especifically for your company", "display_name": "odoo_custom_module", "description": false, "tracking": "none", "product_tmpl_id": [94, "odoo_custom_module"], "to_weight": false}], "jsonrpc": "2.0", "id": 476383618}