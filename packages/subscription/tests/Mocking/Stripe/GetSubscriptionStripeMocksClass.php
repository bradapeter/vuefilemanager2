<?php
namespace Tests\Mocking\Stripe;

use Illuminate\Support\Facades\Http;

class GetSubscriptionStripeMocksClass
{
    public function __invoke()
    {
        return Http::fake([
            'https://api.stripe.com/v1/subscriptions/*' => Http::response([
                'id'                                => 'sub_1K9m2OB9m4sTKy1qS88pLbae',
                'object'                            => 'subscription',
                'application_fee_percent'           => null,
                'automatic_tax'                     => [
                    'enabled' => false,
                ],
                'billing_cycle_anchor'              => 1640245712,
                'billing_thresholds'                => null,
                'cancel_at'                         => null,
                'cancel_at_period_end'              => false,
                'canceled_at'                       => null,
                'collection_method'                 => 'charge_automatically',
                'created'                           => 1640245712,
                'current_period_end'                => 1642924112,
                'current_period_start'              => 1640245712,
                'customer'                          => 'cus_KpQkwLRLyL7LO6',
                'days_until_due'                    => null,
                'default_payment_method'            => null,
                'default_source'                    => null,
                'default_tax_rates'                 => [
                ],
                'discount'                          => null,
                'ended_at'                          => null,
                'items'                             => [
                    'object'      => 'list',
                    'data'        => [
                        [
                            'id'                 => 'si_KpQumucQ7kmpNb',
                            'object'             => 'subscription_item',
                            'billing_thresholds' => null,
                            'created'            => 1640245713,
                            'metadata'           => [
                            ],
                            'plan'               => [
                                'id'                => 'price_1K9YYAB9m4sTKy1q5gWMuAew',
                                'object'            => 'plan',
                                'active'            => true,
                                'aggregate_usage'   => 'max',
                                'amount'            => null,
                                'amount_decimal'    => null,
                                'billing_scheme'    => 'tiered',
                                'created'           => 1640193866,
                                'currency'          => 'usd',
                                'interval'          => 'month',
                                'interval_count'    => 1,
                                'livemode'          => false,
                                'metadata'          => [
                                ],
                                'nickname'          => 'flatFee',
                                'product'           => 'prod_KpCyJm8aplWWQm',
                                'tiers_mode'        => 'volume',
                                'transform_usage'   => null,
                                'trial_period_days' => null,
                                'usage_type'        => 'metered',
                            ],
                            'price'              => [
                                'id'                  => 'price_1K9YYAB9m4sTKy1q5gWMuAew',
                                'object'              => 'price',
                                'active'              => true,
                                'billing_scheme'      => 'tiered',
                                'created'             => 1640193866,
                                'currency'            => 'usd',
                                'livemode'            => false,
                                'lookup_key'          => null,
                                'metadata'            => [
                                ],
                                'nickname'            => 'flatFee',
                                'product'             => 'prod_KpCyJm8aplWWQm',
                                'recurring'           => [
                                    'aggregate_usage'   => 'max',
                                    'interval'          => 'month',
                                    'interval_count'    => 1,
                                    'trial_period_days' => null,
                                    'usage_type'        => 'metered',
                                ],
                                'tax_behavior'        => 'unspecified',
                                'tiers_mode'          => 'volume',
                                'transform_quantity'  => null,
                                'type'                => 'recurring',
                                'unit_amount'         => null,
                                'unit_amount_decimal' => null,
                            ],
                            'subscription'       => 'sub_1K9m2OB9m4sTKy1qS88pLbae',
                            'tax_rates'          => [
                            ],
                        ],
                        [
                            'id'                 => 'si_KpQuzOIrxHnIje',
                            'object'             => 'subscription_item',
                            'billing_thresholds' => null,
                            'created'            => 1640245713,
                            'metadata'           => [
                            ],
                            'plan'               => [
                                'id'                => 'price_1K9YYAB9m4sTKy1qfQssuCPg',
                                'object'            => 'plan',
                                'active'            => true,
                                'aggregate_usage'   => 'max',
                                'amount'            => null,
                                'amount_decimal'    => null,
                                'billing_scheme'    => 'tiered',
                                'created'           => 1640193866,
                                'currency'          => 'usd',
                                'interval'          => 'month',
                                'interval_count'    => 1,
                                'livemode'          => false,
                                'metadata'          => [
                                ],
                                'nickname'          => 'member',
                                'product'           => 'prod_KpCyJm8aplWWQm',
                                'tiers_mode'        => 'volume',
                                'transform_usage'   => null,
                                'trial_period_days' => null,
                                'usage_type'        => 'metered',
                            ],
                            'price'              => [
                                'id'                  => 'price_1K9YYAB9m4sTKy1qfQssuCPg',
                                'object'              => 'price',
                                'active'              => true,
                                'billing_scheme'      => 'tiered',
                                'created'             => 1640193866,
                                'currency'            => 'usd',
                                'livemode'            => false,
                                'lookup_key'          => null,
                                'metadata'            => [
                                ],
                                'nickname'            => 'member',
                                'product'             => 'prod_KpCyJm8aplWWQm',
                                'recurring'           => [
                                    'aggregate_usage'   => 'max',
                                    'interval'          => 'month',
                                    'interval_count'    => 1,
                                    'trial_period_days' => null,
                                    'usage_type'        => 'metered',
                                ],
                                'tax_behavior'        => 'unspecified',
                                'tiers_mode'          => 'volume',
                                'transform_quantity'  => null,
                                'type'                => 'recurring',
                                'unit_amount'         => null,
                                'unit_amount_decimal' => null,
                            ],
                            'subscription'       => 'sub_1K9m2OB9m4sTKy1qS88pLbae',
                            'tax_rates'          => [
                            ],
                        ],
                        [
                            'id'                 => 'si_KpQujIPDUG3syE',
                            'object'             => 'subscription_item',
                            'billing_thresholds' => null,
                            'created'            => 1640245713,
                            'metadata'           => [
                            ],
                            'plan'               => [
                                'id'                => 'price_1K9YY9B9m4sTKy1qC8YbwjBl',
                                'object'            => 'plan',
                                'active'            => true,
                                'aggregate_usage'   => 'max',
                                'amount'            => null,
                                'amount_decimal'    => null,
                                'billing_scheme'    => 'tiered',
                                'created'           => 1640193865,
                                'currency'          => 'usd',
                                'interval'          => 'month',
                                'interval_count'    => 1,
                                'livemode'          => false,
                                'metadata'          => [
                                ],
                                'nickname'          => 'storage',
                                'product'           => 'prod_KpCyJm8aplWWQm',
                                'tiers_mode'        => 'volume',
                                'transform_usage'   => null,
                                'trial_period_days' => null,
                                'usage_type'        => 'metered',
                            ],
                            'price'              => [
                                'id'                  => 'price_1K9YY9B9m4sTKy1qC8YbwjBl',
                                'object'              => 'price',
                                'active'              => true,
                                'billing_scheme'      => 'tiered',
                                'created'             => 1640193865,
                                'currency'            => 'usd',
                                'livemode'            => false,
                                'lookup_key'          => null,
                                'metadata'            => [
                                ],
                                'nickname'            => 'storage',
                                'product'             => 'prod_KpCyJm8aplWWQm',
                                'recurring'           => [
                                    'aggregate_usage'   => 'max',
                                    'interval'          => 'month',
                                    'interval_count'    => 1,
                                    'trial_period_days' => null,
                                    'usage_type'        => 'metered',
                                ],
                                'tax_behavior'        => 'unspecified',
                                'tiers_mode'          => 'volume',
                                'transform_quantity'  => null,
                                'type'                => 'recurring',
                                'unit_amount'         => null,
                                'unit_amount_decimal' => null,
                            ],
                            'subscription'       => 'sub_1K9m2OB9m4sTKy1qS88pLbae',
                            'tax_rates'          => [
                            ],
                        ],
                        [
                            'id'                 => 'si_KpQuuVifNQyLjh',
                            'object'             => 'subscription_item',
                            'billing_thresholds' => null,
                            'created'            => 1640245713,
                            'metadata'           => [
                            ],
                            'plan'               => [
                                'id'                => 'price_1K9YY9B9m4sTKy1qoqXDn6aA',
                                'object'            => 'plan',
                                'active'            => true,
                                'aggregate_usage'   => 'sum',
                                'amount'            => null,
                                'amount_decimal'    => null,
                                'billing_scheme'    => 'tiered',
                                'created'           => 1640193865,
                                'currency'          => 'usd',
                                'interval'          => 'month',
                                'interval_count'    => 1,
                                'livemode'          => false,
                                'metadata'          => [
                                ],
                                'nickname'          => 'bandwidth',
                                'product'           => 'prod_KpCyJm8aplWWQm',
                                'tiers_mode'        => 'volume',
                                'transform_usage'   => null,
                                'trial_period_days' => null,
                                'usage_type'        => 'metered',
                            ],
                            'price'              => [
                                'id'                  => 'price_1K9YY9B9m4sTKy1qoqXDn6aA',
                                'object'              => 'price',
                                'active'              => true,
                                'billing_scheme'      => 'tiered',
                                'created'             => 1640193865,
                                'currency'            => 'usd',
                                'livemode'            => false,
                                'lookup_key'          => null,
                                'metadata'            => [
                                ],
                                'nickname'            => 'bandwidth',
                                'product'             => 'prod_KpCyJm8aplWWQm',
                                'recurring'           => [
                                    'aggregate_usage'   => 'sum',
                                    'interval'          => 'month',
                                    'interval_count'    => 1,
                                    'trial_period_days' => null,
                                    'usage_type'        => 'metered',
                                ],
                                'tax_behavior'        => 'unspecified',
                                'tiers_mode'          => 'volume',
                                'transform_quantity'  => null,
                                'type'                => 'recurring',
                                'unit_amount'         => null,
                                'unit_amount_decimal' => null,
                            ],
                            'subscription'       => 'sub_1K9m2OB9m4sTKy1qS88pLbae',
                            'tax_rates'          => [
                            ],
                        ],
                    ],
                    'has_more'    => false,
                    'total_count' => 4,
                    'url'         => '/v1/subscription_items?subscription=sub_1K9m2OB9m4sTKy1qS88pLbae',
                ],
                'latest_invoice'                    => 'in_1K9m2OB9m4sTKy1qPV6Gk4kf',
                'livemode'                          => false,
                'metadata'                          => [
                ],
                'next_pending_invoice_item_invoice' => null,
                'pause_collection'                  => null,
                'payment_settings'                  => [
                    'payment_method_options' => null,
                    'payment_method_types'   => null,
                ],
                'pending_invoice_item_interval'     => null,
                'pending_setup_intent'              => 'seti_1K9m2PB9m4sTKy1qpv6f2LfF',
                'pending_update'                    => null,
                'plan'                              => null,
                'quantity'                          => null,
                'schedule'                          => null,
                'start_date'                        => 1640245712,
                'status'                            => 'active',
                'transfer_data'                     => null,
                'trial_end'                         => null,
                'trial_start'                       => null,
            ]),
        ]);
    }
}
