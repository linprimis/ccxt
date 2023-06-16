from ccxt.base.types import Entry


class ImplicitAPI:
    public_get_server_time = publicGetServerTime = Entry('server_time', 'public', 'GET', {'cost': 5})
    public_get_pairs = publicGetPairs = Entry('pairs', 'public', 'GET', {'cost': 5})
    public_get_price_increments = publicGetPriceIncrements = Entry('price_increments', 'public', 'GET', {'cost': 5})
    public_get_summaries = publicGetSummaries = Entry('summaries', 'public', 'GET', {'cost': 5})
    public_get_ticker_all = publicGetTickerAll = Entry('ticker_all', 'public', 'GET', {'cost': 5})
    public_get_pair_ticker = publicGetPairTicker = Entry('{pair}/ticker', 'public', 'GET', {'cost': 5})
    public_get_pair_trades = publicGetPairTrades = Entry('{pair}/trades', 'public', 'GET', {'cost': 5})
    public_get_pair_depth = publicGetPairDepth = Entry('{pair}/depth', 'public', 'GET', {'cost': 5})
    private_post_getinfo = privatePostGetInfo = Entry('getInfo', 'private', 'POST', {'cost': 4})
    private_post_transhistory = privatePostTransHistory = Entry('transHistory', 'private', 'POST', {'cost': 4})
    private_post_trade = privatePostTrade = Entry('trade', 'private', 'POST', {'cost': 1})
    private_post_tradehistory = privatePostTradeHistory = Entry('tradeHistory', 'private', 'POST', {'cost': 4})
    private_post_openorders = privatePostOpenOrders = Entry('openOrders', 'private', 'POST', {'cost': 4})
    private_post_orderhistory = privatePostOrderHistory = Entry('orderHistory', 'private', 'POST', {'cost': 4})
    private_post_getorder = privatePostGetOrder = Entry('getOrder', 'private', 'POST', {'cost': 4})
    private_post_cancelorder = privatePostCancelOrder = Entry('cancelOrder', 'private', 'POST', {'cost': 4})
    private_post_withdrawfee = privatePostWithdrawFee = Entry('withdrawFee', 'private', 'POST', {'cost': 4})
    private_post_withdrawcoin = privatePostWithdrawCoin = Entry('withdrawCoin', 'private', 'POST', {'cost': 4})
    private_post_listdownline = privatePostListDownline = Entry('listDownline', 'private', 'POST', {'cost': 4})
    private_post_checkdownline = privatePostCheckDownline = Entry('checkDownline', 'private', 'POST', {'cost': 4})
    private_post_createvoucher = privatePostCreateVoucher = Entry('createVoucher', 'private', 'POST', {'cost': 4})
