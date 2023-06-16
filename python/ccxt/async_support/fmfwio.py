# -*- coding: utf-8 -*-

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

from ccxt.async_support.hitbtc import hitbtc
from ccxt.abstract.fmfwio import ImplicitAPI


class fmfwio(hitbtc, ImplicitAPI):

    def describe(self):
        return self.deep_extend(super(fmfwio, self).describe(), {
            'id': 'fmfwio',
            'name': 'FMFW.io',
            'countries': ['KN'],
            'urls': {
                'logo': 'https://user-images.githubusercontent.com/1294454/159177712-b685b40c-5269-4cea-ac83-f7894c49525d.jpg',
                'api': {
                    'public': 'https://api.fmfw.io',
                    'private': 'https://api.fmfw.io',
                },
                'www': 'https://fmfw.io',
                'doc': 'https://api.fmfw.io/api/2/explore/',
                'fees': 'https://fmfw.io/fees-and-limits',
                'referral': 'https://fmfw.io/referral/da948b21d6c92d69',
            },
            'fees': {
                'trading': {
                    'maker': self.parse_number('0.005'),
                    'taker': self.parse_number('0.005'),
                },
            },
        })
