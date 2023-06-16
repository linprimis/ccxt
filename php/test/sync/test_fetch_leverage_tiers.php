<?php
namespace ccxt;
use \ccxt\Precise;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once __DIR__ . '/../base/test_leverage_tier.php';

function test_fetch_leverage_tiers($exchange, $skipped_properties, $symbol) {
    $method = 'fetchLeverageTiers';
    $tiers = $exchange->fetch_leverage_tiers($symbol);
    // const format = {
    //     'RAY/USDT': [
    //       {},
    //     ],
    // };
    assert(is_array($tiers), $exchange->id . ' ' . $method . ' ' . $symbol . ' must return an object. ' . $exchange->json($tiers));
    $tier_keys = is_array($tiers) ? array_keys($tiers) : array();
    $array_length = count($tier_keys);
    assert($array_length >= 1, $exchange->id . ' ' . $method . ' ' . $symbol . ' must have at least one entry. ' . $exchange->json($tiers));
    for ($i = 0; $i < $array_length; $i++) {
        $tiers_for_symbol = $tiers[$tier_keys[$i]];
        $array_length_symbol = count($tiers_for_symbol);
        assert($array_length_symbol >= 1, $exchange->id . ' ' . $method . ' ' . $symbol . ' must have at least one entry. ' . $exchange->json($tiers));
        for ($j = 0; $j < count($tiers_for_symbol); $j++) {
            test_leverage_tier($exchange, $skipped_properties, $method, $tiers_for_symbol[$j]);
        }
    }
}
