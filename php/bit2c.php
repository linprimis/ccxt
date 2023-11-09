<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use ccxt\abstract\bit2c as Exchange;

class bit2c extends Exchange {

    public function describe() {
        return $this->deep_extend(parent::describe(), array(
            'id' => 'bit2c',
            'name' => 'Bit2C',
            'countries' => array( 'IL' ), // Israel
            'rateLimit' => 3000,
            'pro' => false,
            'has' => array(
                'CORS' => null,
                'spot' => true,
                'margin' => false,
                'swap' => false,
                'future' => false,
                'option' => false,
                'addMargin' => false,
                'cancelOrder' => true,
                'createOrder' => true,
                'createReduceOnlyOrder' => false,
                'fetchBalance' => true,
                'fetchBorrowRate' => false,
                'fetchBorrowRateHistories' => false,
                'fetchBorrowRateHistory' => false,
                'fetchBorrowRates' => false,
                'fetchBorrowRatesPerSymbol' => false,
                'fetchDepositAddress' => true,
                'fetchFundingHistory' => false,
                'fetchFundingRate' => false,
                'fetchFundingRateHistory' => false,
                'fetchFundingRates' => false,
                'fetchIndexOHLCV' => false,
                'fetchLeverage' => false,
                'fetchLeverageTiers' => false,
                'fetchMarginMode' => false,
                'fetchMarkOHLCV' => false,
                'fetchMyTrades' => true,
                'fetchOpenInterestHistory' => false,
                'fetchOpenOrders' => true,
                'fetchOrder' => true,
                'fetchOrderBook' => true,
                'fetchPosition' => false,
                'fetchPositionMode' => false,
                'fetchPositions' => false,
                'fetchPositionsRisk' => false,
                'fetchPremiumIndexOHLCV' => false,
                'fetchTicker' => true,
                'fetchTrades' => true,
                'fetchTradingFee' => false,
                'fetchTradingFees' => true,
                'fetchTransfer' => false,
                'fetchTransfers' => false,
                'reduceMargin' => false,
                'setLeverage' => false,
                'setMarginMode' => false,
                'setPositionMode' => false,
                'transfer' => false,
                'ws' => false,
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766119-3593220e-5ece-11e7-8b3a-5a041f6bcc3f.jpg',
                'api' => array(
                    'rest' => 'https://bit2c.co.il',
                ),
                'www' => 'https://www.bit2c.co.il',
                'referral' => 'https://bit2c.co.il/Aff/63bfed10-e359-420c-ab5a-ad368dab0baf',
                'doc' => array(
                    'https://www.bit2c.co.il/home/api',
                    'https://github.com/OferE/bit2c',
                ),
            ),
            'api' => array(
                'public' => array(
                    'get' => array(
                        'Exchanges/{pair}/Ticker',
                        'Exchanges/{pair}/orderbook',
                        'Exchanges/{pair}/trades',
                        'Exchanges/{pair}/lasttrades',
                    ),
                ),
                'private' => array(
                    'post' => array(
                        'Merchant/CreateCheckout',
                        'Funds/AddCoinFundsRequest',
                        'Order/AddFund',
                        'Order/AddOrder',
                        'Order/GetById',
                        'Order/AddOrderMarketPriceBuy',
                        'Order/AddOrderMarketPriceSell',
                        'Order/CancelOrder',
                        'Order/AddCoinFundsRequest',
                        'Order/AddStopOrder',
                        'Payment/GetMyId',
                        'Payment/Send',
                        'Payment/Pay',
                    ),
                    'get' => array(
                        'Account/Balance',
                        'Account/Balance/v2',
                        'Order/MyOrders',
                        'Order/GetById',
                        'Order/AccountHistory',
                        'Order/OrderHistory',
                    ),
                ),
            ),
            'markets' => array(
                'BTC/NIS' => $this->safe_market_structure(array( 'id' => 'BtcNis', 'symbol' => 'BTC/NIS', 'base' => 'BTC', 'quote' => 'NIS', 'baseId' => 'Btc', 'quoteId' => 'Nis', 'type' => 'spot', 'spot' => true )),
                'ETH/NIS' => $this->safe_market_structure(array( 'id' => 'EthNis', 'symbol' => 'ETH/NIS', 'base' => 'ETH', 'quote' => 'NIS', 'baseId' => 'Eth', 'quoteId' => 'Nis', 'type' => 'spot', 'spot' => true )),
                'LTC/NIS' => $this->safe_market_structure(array( 'id' => 'LtcNis', 'symbol' => 'LTC/NIS', 'base' => 'LTC', 'quote' => 'NIS', 'baseId' => 'Ltc', 'quoteId' => 'Nis', 'type' => 'spot', 'spot' => true )),
                'USDC/NIS' => $this->safe_market_structure(array( 'id' => 'UsdcNis', 'symbol' => 'USDC/NIS', 'base' => 'USDC', 'quote' => 'NIS', 'baseId' => 'Usdc', 'quoteId' => 'Nis', 'type' => 'spot', 'spot' => true )),
            ),
            'fees' => array(
                'trading' => array(
                    'tierBased' => true,
                    'percentage' => true,
                    'maker' => $this->parse_number('0.025'),
                    'taker' => $this->parse_number('0.03'),
                    'tiers' => array(
                        'taker' => array(
                            array( $this->parse_number('0'), $this->parse_number('0.03') ),
                            array( $this->parse_number('20000'), $this->parse_number('0.0275') ),
                            array( $this->parse_number('50000'), $this->parse_number('0.025') ),
                            array( $this->parse_number('75000'), $this->parse_number('0.0225') ),
                            array( $this->parse_number('100000'), $this->parse_number('0.02') ),
                            array( $this->parse_number('250000'), $this->parse_number('0.015') ),
                            array( $this->parse_number('500000'), $this->parse_number('0.0125') ),
                            array( $this->parse_number('750000'), $this->parse_number('0.01') ),
                            array( $this->parse_number('1000000'), $this->parse_number('0.008') ),
                            array( $this->parse_number('2000000'), $this->parse_number('0.006') ),
                            array( $this->parse_number('3000000'), $this->parse_number('0.004') ),
                            array( $this->parse_number('4000000'), $this->parse_number('0.002') ),
                        ),
                        'maker' => array(
                            array( $this->parse_number('0'), $this->parse_number('0.025') ),
                            array( $this->parse_number('20000'), $this->parse_number('0.0225') ),
                            array( $this->parse_number('50000'), $this->parse_number('0.02') ),
                            array( $this->parse_number('75000'), $this->parse_number('0.0175') ),
                            array( $this->parse_number('100000'), $this->parse_number('0.015') ),
                            array( $this->parse_number('250000'), $this->parse_number('0.01') ),
                            array( $this->parse_number('500000'), $this->parse_number('0.0075') ),
                            array( $this->parse_number('750000'), $this->parse_number('0.005') ),
                            array( $this->parse_number('1000000'), $this->parse_number('0.004') ),
                            array( $this->parse_number('2000000'), $this->parse_number('0.003') ),
                            array( $this->parse_number('3000000'), $this->parse_number('0.002') ),
                            array( $this->parse_number('4000000'), $this->parse_number('0.001') ),
                        ),
                    ),
                ),
            ),
            'options' => array(
                'fetchTradesMethod' => 'public_get_exchanges_pair_trades',
            ),
            'precisionMode' => TICK_SIZE,
            'exceptions' => array(
                'exact' => array(
                    'Please provide valid APIkey' => '\\ccxt\\AuthenticationError', // array( "error" : "Please provide valid APIkey" )
                    'No order found.' => '\\ccxt\\OrderNotFound', // array( "Error" : "No order found." )
                ),
                'broad' => array(
                    // array( "error" => "Please provide valid nonce in Request Nonce (1598218490) is not bigger than last nonce (1598218490).")
                    // array( "error" => "Please provide valid nonce in Request UInt64.TryParse failed for nonce :" )
                    'Please provide valid nonce' => '\\ccxt\\InvalidNonce',
                    'please approve new terms of use on site' => '\\ccxt\\PermissionDenied', // array( "error" : "please approve new terms of use on site." )
                ),
            ),
        ));
    }

    public function parse_balance($response): array {
        $result = array(
            'info' => $response,
            'timestamp' => null,
            'datetime' => null,
        );
        $codes = is_array($this->currencies) ? array_keys($this->currencies) : array();
        for ($i = 0; $i < count($codes); $i++) {
            $code = $codes[$i];
            $account = $this->account();
            $currency = $this->currency($code);
            $uppercase = strtoupper($currency['id']);
            if (is_array($response) && array_key_exists($uppercase, $response)) {
                $account['free'] = $this->safe_string($response, 'AVAILABLE_' . $uppercase);
                $account['total'] = $this->safe_string($response, $uppercase);
            }
            $result[$code] = $account;
        }
        return $this->safe_balance($result);
    }

    public function fetch_balance($params = array ()) {
        /**
         * query for balance and get the amount of funds available for trading or funds locked in orders
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} a {@link https://github.com/ccxt/ccxt/wiki/Manual#balance-structure balance structure}
         */
        $this->load_markets();
        $response = $this->privateGetAccountBalanceV2 ($params);
        //
        //     {
        //         "AVAILABLE_NIS" => 0.0,
        //         "NIS" => 0.0,
        //         "LOCKED_NIS" => 0.0,
        //         "AVAILABLE_BTC" => 0.0,
        //         "BTC" => 0.0,
        //         "LOCKED_BTC" => 0.0,
        //         "AVAILABLE_ETH" => 0.0,
        //         "ETH" => 0.0,
        //         "LOCKED_ETH" => 0.0,
        //         "AVAILABLE_BCHSV" => 0.0,
        //         "BCHSV" => 0.0,
        //         "LOCKED_BCHSV" => 0.0,
        //         "AVAILABLE_BCHABC" => 0.0,
        //         "BCHABC" => 0.0,
        //         "LOCKED_BCHABC" => 0.0,
        //         "AVAILABLE_LTC" => 0.0,
        //         "LTC" => 0.0,
        //         "LOCKED_LTC" => 0.0,
        //         "AVAILABLE_ETC" => 0.0,
        //         "ETC" => 0.0,
        //         "LOCKED_ETC" => 0.0,
        //         "AVAILABLE_BTG" => 0.0,
        //         "BTG" => 0.0,
        //         "LOCKED_BTG" => 0.0,
        //         "AVAILABLE_GRIN" => 0.0,
        //         "GRIN" => 0.0,
        //         "LOCKED_GRIN" => 0.0,
        //         "Fees" => {
        //             "BtcNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "EthNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "BchabcNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "LtcNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "EtcNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "BtgNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "LtcBtc" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "BchsvNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "GrinNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 )
        //         }
        //     }
        //
        return $this->parse_balance($response);
    }

    public function fetch_order_book(string $symbol, ?int $limit = null, $params = array ()) {
        /**
         * fetches information on open orders with bid (buy) and ask (sell) prices, volumes and other data
         * @param {string} $symbol unified $symbol of the $market to fetch the order book for
         * @param {int} [$limit] the maximum amount of order book entries to return
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} A dictionary of {@link https://github.com/ccxt/ccxt/wiki/Manual#order-book-structure order book structures} indexed by $market symbols
         */
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'pair' => $market['id'],
        );
        $orderbook = $this->publicGetExchangesPairOrderbook (array_merge($request, $params));
        return $this->parse_order_book($orderbook, $symbol);
    }

    public function parse_ticker($ticker, $market = null): array {
        $symbol = $this->safe_symbol(null, $market);
        $timestamp = $this->milliseconds();
        $averagePrice = $this->safe_string($ticker, 'av');
        $baseVolume = $this->safe_string($ticker, 'a');
        $last = $this->safe_string($ticker, 'll');
        return $this->safe_ticker(array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'high' => null,
            'low' => null,
            'bid' => $this->safe_string($ticker, 'h'),
            'bidVolume' => null,
            'ask' => $this->safe_string($ticker, 'l'),
            'askVolume' => null,
            'vwap' => null,
            'open' => null,
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => null,
            'average' => $averagePrice,
            'baseVolume' => $baseVolume,
            'quoteVolume' => null,
            'info' => $ticker,
        ), $market);
    }

    public function fetch_ticker(string $symbol, $params = array ()) {
        /**
         * fetches a price ticker, a statistical calculation with the information calculated over the past 24 hours for a specific $market
         * @param {string} $symbol unified $symbol of the $market to fetch the ticker for
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} a {@link https://github.com/ccxt/ccxt/wiki/Manual#ticker-structure ticker structure}
         */
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'pair' => $market['id'],
        );
        $response = $this->publicGetExchangesPairTicker (array_merge($request, $params));
        return $this->parse_ticker($response, $market);
    }

    public function fetch_trades(string $symbol, ?int $since = null, ?int $limit = null, $params = array ()) {
        /**
         * get the list of most recent trades for a particular $symbol
         * @param {string} $symbol unified $symbol of the $market to fetch trades for
         * @param {int} [$since] timestamp in ms of the earliest trade to fetch
         * @param {int} [$limit] the maximum amount of trades to fetch
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {Trade[]} a list of {@link https://github.com/ccxt/ccxt/wiki/Manual#public-trades trade structures}
         */
        $this->load_markets();
        $market = $this->market($symbol);
        $method = $this->options['fetchTradesMethod']; // public_get_exchanges_pair_trades or public_get_exchanges_pair_lasttrades
        $request = array(
            'pair' => $market['id'],
        );
        if ($since !== null) {
            $request['date'] = $this->parse_to_int($since);
        }
        if ($limit !== null) {
            $request['limit'] = $limit; // max 100000
        }
        $response = $this->$method (array_merge($request, $params));
        //
        //     array(
        //         array("date":1651785980,"price":127975.68,"amount":0.3750321,"isBid":true,"tid":1261018),
        //         array("date":1651785980,"price":127987.70,"amount":0.0389527820303982335802581029,"isBid":true,"tid":1261020),
        //         array("date":1651786701,"price":128084.03,"amount":0.0015614749161156156626239821,"isBid":true,"tid":1261022),
        //     )
        //
        if (gettype($response) === 'string') {
            throw new ExchangeError($response);
        }
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function fetch_trading_fees($params = array ()) {
        /**
         * fetch the trading $fees for multiple markets
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} a dictionary of {@link https://github.com/ccxt/ccxt/wiki/Manual#$fee-structure $fee structures} indexed by market symbols
         */
        $this->load_markets();
        $response = $this->privateGetAccountBalance ($params);
        //
        //     {
        //         "AVAILABLE_NIS" => 0.0,
        //         "NIS" => 0.0,
        //         "LOCKED_NIS" => 0.0,
        //         "AVAILABLE_BTC" => 0.0,
        //         "BTC" => 0.0,
        //         "LOCKED_BTC" => 0.0,
        //         ...
        //         "Fees" => {
        //             "BtcNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             "EthNis" => array( "FeeMaker" => 1.0, "FeeTaker" => 1.0 ),
        //             ...
        //         }
        //     }
        //
        $fees = $this->safe_value($response, 'Fees', array());
        $keys = is_array($fees) ? array_keys($fees) : array();
        $result = array();
        for ($i = 0; $i < count($keys); $i++) {
            $marketId = $keys[$i];
            $symbol = $this->safe_symbol($marketId);
            $fee = $this->safe_value($fees, $marketId);
            $makerString = $this->safe_string($fee, 'FeeMaker');
            $takerString = $this->safe_string($fee, 'FeeTaker');
            $maker = $this->parse_number(Precise::string_div($makerString, '100'));
            $taker = $this->parse_number(Precise::string_div($takerString, '100'));
            $result[$symbol] = array(
                'info' => $fee,
                'symbol' => $symbol,
                'taker' => $taker,
                'maker' => $maker,
                'percentage' => true,
                'tierBased' => true,
            );
        }
        return $result;
    }

    public function create_order(string $symbol, string $type, string $side, $amount, $price = null, $params = array ()) {
        /**
         * create a trade order
         * @param {string} $symbol unified $symbol of the $market to create an order in
         * @param {string} $type 'market' or 'limit'
         * @param {string} $side 'buy' or 'sell'
         * @param {float} $amount how much of currency you want to trade in units of base currency
         * @param {float} [$price] the $price at which the order is to be fullfilled, in units of the quote currency, ignored in $market orders
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} an {@link https://github.com/ccxt/ccxt/wiki/Manual#order-structure order structure}
         */
        $this->load_markets();
        $method = 'privatePostOrderAddOrder';
        $market = $this->market($symbol);
        $request = array(
            'Amount' => $amount,
            'Pair' => $market['id'],
        );
        if ($type === 'market') {
            $method .= 'MarketPrice' . $this->capitalize($side);
        } else {
            $request['Price'] = $price;
            $amountString = $this->number_to_string($amount);
            $priceString = $this->number_to_string($price);
            $request['Total'] = $this->parse_number(Precise::string_mul($amountString, $priceString));
            $request['IsBid'] = ($side === 'buy');
        }
        $response = $this->$method (array_merge($request, $params));
        return $this->parse_order($response, $market);
    }

    public function cancel_order(string $id, ?string $symbol = null, $params = array ()) {
        /**
         * cancels an open order
         * @param {string} $id order $id
         * @param {string} $symbol Not used by bit2c cancelOrder ()
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} An {@link https://github.com/ccxt/ccxt/wiki/Manual#order-structure order structure}
         */
        $request = array(
            'id' => $id,
        );
        return $this->privatePostOrderCancelOrder (array_merge($request, $params));
    }

    public function fetch_open_orders(?string $symbol = null, ?int $since = null, ?int $limit = null, $params = array ()) {
        /**
         * fetch all unfilled currently open $orders
         * @param {string} $symbol unified $market $symbol
         * @param {int} [$since] the earliest time in ms to fetch open $orders for
         * @param {int} [$limit] the maximum number of  open $orders structures to retrieve
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {Order[]} a list of {@link https://github.com/ccxt/ccxt/wiki/Manual#order-structure order structures}
         */
        if ($symbol === null) {
            throw new ArgumentsRequired($this->id . ' fetchOpenOrders() requires a $symbol argument');
        }
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'pair' => $market['id'],
        );
        $response = $this->privateGetOrderMyOrders (array_merge($request, $params));
        $orders = $this->safe_value($response, $market['id'], array());
        $asks = $this->safe_value($orders, 'ask', array());
        $bids = $this->safe_value($orders, 'bid', array());
        return $this->parse_orders($this->array_concat($asks, $bids), $market, $since, $limit);
    }

    public function fetch_order(string $id, ?string $symbol = null, $params = array ()) {
        /**
         * fetches information on an order made by the user
         * @param {string} $symbol unified $market $symbol
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} An {@link https://github.com/ccxt/ccxt/wiki/Manual#order-structure order structure}
         */
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'id' => $id,
        );
        $response = $this->privateGetOrderGetById (array_merge($request, $params));
        //
        //         {
        //             "pair" => "BtcNis",
        //             "status" => "Completed",
        //             "created" => 1666689837,
        //             "type" => 0,
        //             "order_type" => 0,
        //             "amount" => 0.00000000,
        //             "price" => 50000.00000000,
        //             "stop" => 0,
        //             "id" => 10951473,
        //             "initialAmount" => 2.00000000
        //         }
        //
        return $this->parse_order($response, $market);
    }

    public function parse_order($order, $market = null): array {
        //
        //      createOrder
        //      {
        //          "OrderResponse" => array("pair" => "BtcNis", "HasError" => False, "Error" => "", "Message" => ""),
        //          "NewOrder" => array(
        //              "created" => 1505531577,
        //              "type" => 0,
        //              "order_type" => 0,
        //              "status_type" => 0,
        //              "amount" => 0.01,
        //              "price" => 10000,
        //              "stop" => 0,
        //              "id" => 9244416,
        //              "initialAmount" => None,
        //          ),
        //      }
        //      fetchOrder, fetchOpenOrders
        //      {
        //          "pair" => "BtcNis",
        //          "status" => "Completed",
        //          "created" => 1535555837,
        //          "type" => 0,
        //          "order_type" => 0,
        //          "amount" => 0.00000000,
        //          "price" => 120000.00000000,
        //          "stop" => 0,
        //          "id" => 10555173,
        //          "initialAmount" => 2.00000000
        //      }
        //
        $orderUnified = null;
        $isNewOrder = false;
        if (is_array($order) && array_key_exists('NewOrder', $order)) {
            $orderUnified = $order['NewOrder'];
            $isNewOrder = true;
        } else {
            $orderUnified = $order;
        }
        $id = $this->safe_string($orderUnified, 'id');
        $symbol = $this->safe_symbol(null, $market);
        $timestamp = $this->safe_integer_product($orderUnified, 'created', 1000);
        // $status field vary between responses
        // bit2c $status $type:
        // 0 = New
        // 1 = Open
        // 5 = Completed
        $status = null;
        if ($isNewOrder) {
            $tempStatus = $this->safe_integer($orderUnified, 'status_type');
            if ($tempStatus === 0 || $tempStatus === 1) {
                $status = 'open';
            } elseif ($tempStatus === 5) {
                $status = 'closed';
            }
        } else {
            $tempStatus = $this->safe_string($orderUnified, 'status');
            if ($tempStatus === 'New' || $tempStatus === 'Open') {
                $status = 'open';
            } elseif ($tempStatus === 'Completed') {
                $status = 'closed';
            }
        }
        // bit2c $order $type:
        // 0 = LMT,  1 = MKT
        $type = $this->safe_string($orderUnified, 'order_type');
        if ($type === '0') {
            $type = 'limit';
        } elseif ($type === '1') {
            $type = 'market';
        }
        // bit2c $side:
        // 0 = buy, 1 = sell
        $side = $this->safe_string($orderUnified, 'type');
        if ($side === '0') {
            $side = 'buy';
        } elseif ($side === '1') {
            $side = 'sell';
        }
        $price = $this->safe_string($orderUnified, 'price');
        $amount = null;
        $remaining = null;
        if ($isNewOrder) {
            $amount = $this->safe_string($orderUnified, 'amount');  // NOTE:'initialAmount' is currently not set on new $order
            $remaining = $this->safe_string($orderUnified, 'amount');
        } else {
            $amount = $this->safe_string($orderUnified, 'initialAmount');
            $remaining = $this->safe_string($orderUnified, 'amount');
        }
        return $this->safe_order(array(
            'id' => $id,
            'clientOrderId' => null,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'lastTradeTimestamp' => null,
            'status' => $status,
            'symbol' => $symbol,
            'type' => $type,
            'timeInForce' => null,
            'postOnly' => null,
            'side' => $side,
            'price' => $price,
            'stopPrice' => null,
            'triggerPrice' => null,
            'amount' => $amount,
            'filled' => null,
            'remaining' => $remaining,
            'cost' => null,
            'trades' => null,
            'fee' => null,
            'info' => $order,
            'average' => null,
        ), $market);
    }

    public function fetch_my_trades(?string $symbol = null, ?int $since = null, ?int $limit = null, $params = array ()) {
        /**
         * fetch all trades made by the user
         * @param {string} $symbol unified $market $symbol
         * @param {int} [$since] the earliest time in ms to fetch trades for
         * @param {int} [$limit] the maximum number of trades structures to retrieve
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {Trade[]} a list of {@link https://github.com/ccxt/ccxt/wiki/Manual#trade-structure trade structures}
         */
        $this->load_markets();
        $market = null;
        $request = array();
        if ($limit !== null) {
            $request['take'] = $limit;
        }
        $request['take'] = $limit;
        if ($since !== null) {
            $request['toTime'] = $this->yyyymmdd($this->milliseconds(), '.');
            $request['fromTime'] = $this->yyyymmdd($since, '.');
        }
        if ($symbol !== null) {
            $market = $this->market($symbol);
            $request['pair'] = $market['id'];
        }
        $response = $this->privateGetOrderOrderHistory (array_merge($request, $params));
        //
        //     array(
        //         array(
        //             "ticks":1574767951,
        //             "created":"26/11/19 13:32",
        //             "action":1,
        //             "price":"1000",
        //             "pair":"EthNis",
        //             "reference":"EthNis|10867390|10867377",
        //             "fee":"0.5",
        //             "feeAmount":"0.08",
        //             "feeCoin":"₪",
        //             "firstAmount":"-0.015",
        //             "firstAmountBalance":"9",
        //             "secondAmount":"14.93",
        //             "secondAmountBalance":"130,233.28",
        //             "firstCoin":"ETH",
        //             "secondCoin":"₪"
        //         ),
        //         {
        //             "ticks":1574767951,
        //             "created":"26/11/19 13:32",
        //             "action":0,
        //             "price":"1000",
        //             "pair":"EthNis",
        //             "reference":"EthNis|10867390|10867377",
        //             "fee":"0.5",
        //             "feeAmount":"0.08",
        //             "feeCoin":"₪",
        //             "firstAmount":"0.015",
        //             "firstAmountBalance":"9.015",
        //             "secondAmount":"-15.08",
        //             "secondAmountBalance":"130,218.35",
        //             "firstCoin":"ETH",
        //             "secondCoin":"₪"
        //         }
        //     )
        //
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function remove_comma_from_value($str) {
        $newString = '';
        $strParts = explode(',', $str);
        for ($i = 0; $i < count($strParts); $i++) {
            $newString .= $strParts[$i];
        }
        return $newString;
    }

    public function parse_trade($trade, $market = null): array {
        //
        // public fetchTrades
        //
        //     {
        //         "date":1651785980,
        //         "price":127975.68,
        //         "amount":0.3750321,
        //         "isBid":true,
        //         "tid":1261018
        //     }
        //
        // private fetchMyTrades
        //
        //     {
        //         "ticks":1574767951,
        //         "created":"26/11/19 13:32",
        //         "action":1,
        //         "price":"1,000",
        //         "pair":"EthNis",
        //         "reference":"EthNis|10867390|10867377",
        //         "fee":"0.5",
        //         "feeAmount":"0.08",
        //         "feeCoin":"₪",
        //         "firstAmount":"-0.015",
        //         "firstAmountBalance":"9",
        //         "secondAmount":"14.93",
        //         "secondAmountBalance":"130,233.28",
        //         "firstCoin":"ETH",
        //         "secondCoin":"₪"
        //         "isMaker" => True,
        //     }
        //
        $timestamp = null;
        $id = null;
        $price = null;
        $amount = null;
        $orderId = null;
        $fee = null;
        $side = null;
        $makerOrTaker = null;
        $reference = $this->safe_string($trade, 'reference');
        if ($reference !== null) {
            $id = $reference;
            $timestamp = $this->safe_timestamp($trade, 'ticks');
            $price = $this->safe_string($trade, 'price');
            $price = $this->remove_comma_from_value($price);
            $amount = $this->safe_string($trade, 'firstAmount');
            $reference_parts = explode('|', $reference); // $reference contains 'pair|orderId_by_taker|orderId_by_maker'
            $marketId = $this->safe_string($trade, 'pair');
            $market = $this->safe_market($marketId, $market);
            $market = $this->safe_market($reference_parts[0], $market);
            $isMaker = $this->safe_value($trade, 'isMaker');
            $makerOrTaker = $isMaker ? 'maker' : 'taker';
            $orderId = $isMaker ? $reference_parts[2] : $reference_parts[1];
            $side = $this->safe_integer($trade, 'action');
            if ($side === 0) {
                $side = 'buy';
            } elseif ($side === 1) {
                $side = 'sell';
            }
            $feeCost = $this->safe_string($trade, 'feeAmount');
            if ($feeCost !== null) {
                $fee = array(
                    'cost' => $feeCost,
                    'currency' => 'NIS',
                );
            }
        } else {
            $timestamp = $this->safe_timestamp($trade, 'date');
            $id = $this->safe_string($trade, 'tid');
            $price = $this->safe_string($trade, 'price');
            $amount = $this->safe_string($trade, 'amount');
            $side = $this->safe_value($trade, 'isBid');
            if ($side !== null) {
                if ($side) {
                    $side = 'buy';
                } else {
                    $side = 'sell';
                }
            }
        }
        $market = $this->safe_market(null, $market);
        return $this->safe_trade(array(
            'info' => $trade,
            'id' => $id,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'symbol' => $market['symbol'],
            'order' => $orderId,
            'type' => null,
            'side' => $side,
            'takerOrMaker' => $makerOrTaker,
            'price' => $price,
            'amount' => $amount,
            'cost' => null,
            'fee' => $fee,
        ), $market);
    }

    public function is_fiat($code) {
        return $code === 'NIS';
    }

    public function fetch_deposit_address(string $code, $params = array ()) {
        /**
         * fetch the deposit address for a $currency associated with this account
         * @param {string} $code unified $currency $code
         * @param {array} [$params] extra parameters specific to the bit2c api endpoint
         * @return {array} an {@link https://github.com/ccxt/ccxt/wiki/Manual#address-structure address structure}
         */
        $this->load_markets();
        $currency = $this->currency($code);
        if ($this->is_fiat($code)) {
            throw new NotSupported($this->id . ' fetchDepositAddress() does not support fiat currencies');
        }
        $request = array(
            'Coin' => $currency['id'],
        );
        $response = $this->privatePostFundsAddCoinFundsRequest (array_merge($request, $params));
        //
        //     {
        //         "address" => "0xf14b94518d74aff2b1a6d3429471bcfcd3881d42",
        //         "hasTx" => False
        //     }
        //
        return $this->parse_deposit_address($response, $currency);
    }

    public function parse_deposit_address($depositAddress, $currency = null) {
        //
        //     {
        //         "address" => "0xf14b94518d74aff2b1a6d3429471bcfcd3881d42",
        //         "hasTx" => False
        //     }
        //
        $address = $this->safe_string($depositAddress, 'address');
        $this->check_address($address);
        $code = $this->safe_currency_code(null, $currency);
        return array(
            'currency' => $code,
            'network' => null,
            'address' => $address,
            'tag' => null,
            'info' => $depositAddress,
        );
    }

    public function nonce() {
        return $this->milliseconds();
    }

    public function sign($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urls['api']['rest'] . '/' . $this->implode_params($path, $params);
        if ($api === 'public') {
            $url .= '.json';
        } else {
            $this->check_required_credentials();
            $nonce = $this->nonce();
            $query = array_merge(array(
                'nonce' => $nonce,
            ), $params);
            $auth = $this->urlencode($query);
            if ($method === 'GET') {
                if ($query) {
                    $url .= '?' . $auth;
                }
            } else {
                $body = $auth;
            }
            $signature = $this->hmac($this->encode($auth), $this->encode($this->secret), 'sha512', 'base64');
            $headers = array(
                'Content-Type' => 'application/x-www-form-urlencoded',
                'key' => $this->apiKey,
                'sign' => $signature,
            );
        }
        return array( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors($httpCode, $reason, $url, $method, $headers, $body, $response, $requestHeaders, $requestBody) {
        if ($response === null) {
            return null; // fallback to default $error handler
        }
        //
        //     array( "error" : "please approve new terms of use on site." )
        //     array( "error" => "Please provide valid nonce in Request Nonce (1598218490) is not bigger than last nonce (1598218490).")
        //     array( "Error" : "No order found." )
        //
        $error = $this->safe_string($response, 'error');
        if ($error === null) {
            $error = $this->safe_string($response, 'Error');
        }
        if ($error !== null) {
            $feedback = $this->id . ' ' . $body;
            $this->throw_exactly_matched_exception($this->exceptions['exact'], $error, $feedback);
            $this->throw_broadly_matched_exception($this->exceptions['broad'], $error, $feedback);
            throw new ExchangeError($feedback); // unknown message
        }
        return null;
    }
}
