<?php
header('Content-Type: application/json');
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
?>
{"result": [{"printer_ids": [], "iface_printbill": false, "write_date": "2018-09-02 12:00:27", "session_ids": [1], "iface_tax_included": "subtotal", "group_by": true, "customer_facing_display_html": "<div class=\"pos-customer_facing_display pos-palette_01\">\n                <div class=\"pos-customer_products\" name=\"Products list\">\n                    <div class=\"pos_orderlines\">\n                        <div class=\"pos_orderlines_item pos_orderlines_header\">\n                            <div></div>\n                            <div></div>\n                            <div>Quantity</div>\n                            <div>Price</div>\n                        </div>\n                        <div class=\"pos_orderlines_list\">\n                            <div class=\"pos_orderlines_item\">\n                                <div><div style=\"background-image:url(/pos_data_drinks/static/img/th-water.jpg)\"></div></div>\n                                <div>Water</div>\n                                <div>2</div>\n                                <div>$ 4.40</div>\n                            </div>\n                            <div class=\"pos_orderlines_item\">\n                                <div><div style=\"background-image:url(/pos_data_drinks/static/img/th-fanta.jpg)\"></div></div>\n                                <div>Fanta</div>\n                                <div>3</div>\n                                <div>$ 3.12</div>\n                            </div>\n                            <div class=\"pos_orderlines_item\">\n                                <div><div style=\"background-image:url(/pos_data_drinks/static/img/th-gordon.jpg)\"></div></div>\n                                <div>Gordon</div>\n                                <div>3</div>\n                                <div>$ 8.50</div>\n                            </div>\n                            <div class=\"pos_orderlines_item\">\n                                <div><div style=\"background-image:url(/pos_data_drinks/static/img/th-malibu.jpg)\"></div></div>\n                                <div>Malibu Drink</div>\n                                <div>1</div>\n                                <div>$ 4.50</div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n                \n                <div class=\"pos-payment_info\">\n                    <div class=\"pos-adv\" style=\"background-image:url(http://placehold.it/300x350?text=ADV);\"></div>\n                    <div class=\"pos-company_logo\"></div>\n            \n                    <div class=\"pos-payment_info_details\">\n                        <div class=\"pos-total\">\n                            <div>\n                                <span class=\"total-amount-formatting\">TOTAL</span>\n                            </div>\n                            <div>\n                                <span id=\"total-amount\" class=\"pos_total-amount\">$ 469.14</span>\n                            </div>\n                        </div>\n                        <div class=\"pos-paymentlines\">\n                            <div>\n                                <span>Cash:</span>\n                            </div>\n                            <div>\n                                <span>$ 470.00</span>\n                            </div>\n                            <div>\n                                <span class=\"pos-change_title\">Change</span>\n                            </div>\n                            <div>\n                                <span class=\"pos-change_amount\">$ 0.86</span>\n                            </div>\n                        </div>\n                        <div class=\"pos-odoo_logo_container\">\n                            <img src=\"/web/static/src/img/logo_inverse_white_206px.png\" alt=\"Odoo Logo\">\n                        </div>\n                    </div>\n                </div>\n            </div>\n                            \n    ", "last_session_closing_cash": 0.0, "crm_team_id": [4, "Point of Sale"], "group_pos_manager_id": [86, "Point of Sale / Manager"], "iface_scan_via_proxy": false, "iface_vkeyboard": false, "iface_customer_facing_display": false, "receipt_header": false, "start_category": false, "create_date": "2018-09-02 12:00:27", "group_sale_pricelist": false, "module_pos_loyalty": false, "current_session_id": [1, "POS/2018/08/30/01"], "cash_control": false, "tip_product_id": false, "picking_type_id": [27, "PoS Orders"], "is_table_management": true, "iface_orderline_notes": false, "use_pricelist": false, "group_pos_user_id": [85, "Point of Sale / User"], "iface_display_categ_images": false, "module_pos_mercury": false, "current_session_state": "opened", "is_header_or_footer": false, "proxy_ip": false, "stock_location_id": [15, "WH/Stock"], "pos_session_duration": "2", "active": true, "available_pricelist_ids": [1], "id": 1, "iface_print_skip_screen": true, "group_pricelist_item": false, "is_order_printer": false, "iface_tipproduct": false, "currency_id": [3, "USD"], "module_pos_reprint": false, "last_session_closing_date": false, "barcode_nomenclature_id": [1, "Default Nomenclature"], "sequence_line_id": [56, "POS order line Main"], "use_existing_lots": true, "iface_print_via_proxy": false, "barcode_scanner": false, "tax_regime": false, "iface_precompute_cash": false, "module_pos_restaurant": true, "iface_invoicing": false, "iface_payment_terminal": false, "default_cashbox_lines_ids": [], "iface_print_auto": false, "floor_ids": [], "iface_splitbill": false, "company_id": [1, "Demo Company"], "pos_session_state": "opened", "restrict_price_control": false, "default_fiscal_position_id": false, "iface_cashdrawer": false, "__last_update": "2018-09-02 12:00:27", "receipt_footer": false, "tax_regime_selection": false, "pricelist_id": [1, "Public Pricelist (USD)"], "iface_electronic_scale": false, "journal_ids": [6], "sequence_id": [55, "POS Order Main"], "is_posbox": false, "iface_start_categ_id": false, "journal_id": [1, "Customer Invoices (USD)"], "invoice_journal_id": [1, "Customer Invoices (USD)"], "is_installed_account_accountant": true, "uuid": "2b8b5f1f-a18b-4a9d-a5c4-b227500bdc32", "pos_session_username": "Administrator", "fiscal_position_ids": [], "iface_big_scrollbars": false, "name": "Main", "display_name": "Main (Administrator)", "write_uid": [1, "Administrator"], "module_pos_discount": false, "create_uid": [1, "Administrator"]}], "jsonrpc": "2.0", "id": 565834794}