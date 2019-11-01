var minWidth = 1024;

function getViewCount(idvideo) {
    $.getJSON('https://www.googleapis.com/youtube/v3/videos?id=' + idvideo + '&key=AIzaSyBM0_6IKP9NQPd3HIBTfFHwGHJG39XH9jk&part=statistics&callback=?', function(data) {
        if (typeof(data.items[0]) != "undefined") {
            data.items[0].statistics.viewCount
            $("#" + idvideo).append(data.items[0].statistics.viewCount);
        } else {
            console.log('video not exists');
        }
    });
}

function createCss() {
    var deviceWidth = $(window).width() - 17;
    if (deviceWidth < minWidth) {
        deviceWidth = minWidth;
    }
    var scale = deviceWidth / 1280;
    $.injectCSS({
        body: {
            'font-size': 16 * scale,
        },
        '.success-text': {
            p: {
                'font-size': 20 * scale,
                'margin-bottom': 15 * scale,
            }
        },
        '.card-header':{
            'padding-left': 28 * scale,
            'padding-right': 28 * scale,
        }
    })
    $.injectCSS({
        '.footer': {
            '.hotline': {
                'height': 40 * scale,
                '.text-content': {
                    'font-size': 18 * scale,
                    'padding-top': 10 * scale,
                }
            },
            '.footer-2': {
                'padding-top': 40 * scale,
                'padding-bottom': 20 * scale,
            },
            '.item': {
                'padding-top': 20 * scale,
            },
            '.fanpage': {
                'padding': 15 * scale,
                'border-radius': 25 * scale,
                'border-width': 2 * scale,
            },
            '.info': {
                h3: {
                    'font-size': 20 * scale,
                },
                '.address': {
                    'font-size': 11 * scale,
                    'padding-left': 25 * scale,
                    '&:before': {
                        width: 15 * scale,
                        height: 23 * scale,
                        left: 2 * scale,
                        top: 3 * scale,
                    }
                },
                '.phone': {
                    'font-size': 11 * scale,
                    'padding-left': 25 * scale,
                    '&:before': {
                        width: 15 * scale,
                        height: 23 * scale,
                        left: 2 * scale,
                        top: 3 * scale,
                    }
                }
            }
        },
        '.container': {
            'width': 1170 * scale,
            'padding-left': 15 * scale,
            'padding-right': 15 * scale,
            '.row': {
                'margin-left': 15 * scale,
                'margin-right': 15 * scale,
                '.col-xs-1': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-2': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-3': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-4': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-5': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-6': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-7': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-8': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-9': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-10': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-11': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
                '.col-xs-12': {
                    'padding-left': 15 * scale,
                    'padding-right': 15 * scale,
                },
            }
        },
    })
    $.injectCSS({
        '.wrapper': {
            '.pagination': {
                '.page-item': {
                    '.page-link': {
                        'height': 40 * scale,
                        'width': 40 * scale,
                        'border-width': 2 * scale,
                        'font-size': 19 * scale,
                        'margin-right': 3 * scale,
                        'padding-top': 5 * scale,
                        'padding-bottom': 5 * scale,
                        'padding-left': 13 * scale,
                        'padding-right': 13 * scale,
                    }
                }
            },
            '.title': {
                p: {
                    'font-size': 30 * scale,
                    i: {
                        '.line-left': {
                            width: 70 * scale,
                            height: 2 * scale,
                            left: -100 * scale,
                            '&:before': {
                                width: 13 * scale,
                                height: 13 * scale,
                                top: -5 * scale,
                            }
                        },
                        '.line-right': {
                            width: 70 * scale,
                            height: 2 * scale,
                            right: -100 * scale,
                            '&:before': {
                                width: 13 * scale,
                                height: 13 * scale,
                                top: -5 * scale,
                            }
                        }
                    }
                }
            },
            '.flower-theme-default': {
                '.left-flower': {},
                '.right-flower': {
                    top: 110 * scale
                },
            },
            '.flower-theme-2': {
                top: -20 * scale
            },
            '.flower-theme-2': {
                '.left-flower': {},
                '.right-flower': {
                    top: 135 * scale
                },
            },
            '.flower-theme-3': {
                '.left-flower': {},
                '.right-flower': {
                    top: 260 * scale
                },
            },
            '.intro-why-chose': {
                'padding-top': 80 * scale,
                'padding-bottom': 60 * scale,
                '.container': {
                    '.row': {
                        '.col-xs-4': {
                            'padding-left': 15 * scale,
                            'padding-right': 15 * scale,
                        }
                    }
                },
                '.intro-why-chose-content': {
                    'margin-top': 45 * scale,
                },
                figure: {
                    img: {
                        'max-width': 235 * scale,
                        'max-height': 235 * scale,
                    },
                    figcaption: {
                        'margin-top': 10 * scale,
                        'font-size': 16 * scale,
                    }
                }
            },
            '.intro-service': {
                '.intro-service-content ': {
                    'margin-top': 25 * scale,
                    'padding-top': 10 * scale,
                    'padding-bottom': 30 * scale,
                    '.service-slider': {
                        'margin-top': 30 * scale,
                        'padding-top': 30 * scale,
                        'padding-bottom': 30 * scale,
                        '.slick-prev': {
                            height: 50 * scale,
                            width: 50 * scale,
                            left: -5 * scale,
                            '&:before': {
                                'font-size': 50 * scale,
                                'margin-left': 5 * scale,
                            }
                        },
                        '.slick-next': {
                            height: 50 * scale,
                            width: 50 * scale,
                            right: -5 * scale,
                            '&:before': {
                                'font-size': 50 * scale,
                                'margin-left': 5 * scale,
                            }
                        },
                        '.item': {
                            '.service-wrapper': {
                                'width': 300 * scale,
                                'height': 480 * scale,
                                'padding-top': 180 * scale,
                                '.service-img': {
                                    'width': 260 * scale,
                                    'height': 260 * scale,
                                    'left': 25 * scale,
                                    'border-width': 3 * scale,
                                },
                                '.service-content': {
                                    'height': 290 * scale,
                                    'padding-top': 90 * scale,
                                    '.service-name': {
                                        'width': 'calc(100% + ' + 28 * scale + 'px)',
                                        'margin-left': -14 * scale,
                                        'height': 35 * scale,
                                        'border-top-left-radius': 14 * scale,
                                        'border-top-right-radius': 14 * scale,
                                        a: {
                                            'font-size': 16 * scale,
                                            'line-height': 35 * scale,
                                        },
                                        '&:before': {
                                            'bottom': -13 * scale,
                                            'border-left-width': 14 * scale,
                                            'border-top-width': 14 * scale,
                                            'left': 0.5 * scale,
                                        },
                                        '&:after': {
                                            'bottom': -13 * scale,
                                            'border-right-width': 14 * scale,
                                            'border-top-width': 14 * scale,
                                            'right': 0.5 * scale,
                                        },
                                    },
                                    '.service-text': {
                                        'padding-top': 15 * scale,
                                        'padding-bottom': 15 * scale,
                                        'padding-left': 25 * scale,
                                        'padding-right': 25 * scale,
                                    }
                                }
                            }
                        }
                    }
                }
            },
            '.intro-promotion': {
                'padding-top': 40 * scale,
                '.promotion-content ': {
                    'margin-top': 30 * scale,
                    '.promotion-left': {
                        '&:before': {
                            left: 100 * scale,
                            top: -10 * scale,
                            width: 72 * scale,
                            height: 91 * scale,
                        }
                    },
                    '.promotion-right': {
                        '&:before': {
                            'left': -28 * scale,
                            'margin-top': -30 * scale,
                            'border-top-width': 60 * scale,
                            'border-left-width': 60 * scale,
                        }
                    }
                }
            },
            '.intro-news': {
                'padding-top': 40 * scale,
                'padding-bottom': 40 * scale,
                '.container': {
                    '.row': {
                        '.col-xs-4': {
                            'padding-left': 15 * scale,
                            'padding-right': 15 * scale,
                        }
                    }
                },
                '.intro-news-wrapper': {
                    'margin-top': 40 * scale,
                    '.news-item': {
                        '.news-img': {},
                        '.news-title': {
                            'height': 50 * scale,
                            'margin-top': 20 * scale,
                            'margin-bottom': 10 * scale,
                            a: {
                                'font-size': 17 * scale,
                            },
                        },
                        '.news-description': {
                            'font-size': 14 * scale,
                        },
                        '.read-more': {
                            'margin-top': 10 * scale,
                            a: {
                                'font-size': 16 * scale,
                                'padding-right': 30 * scale,
                                'height': 25 * scale,
                                '&:before': {
                                    'font-size': 25 * scale,
                                    'left': 3 * scale,
                                    'top': -7 * scale,
                                }
                            }
                        }
                    }
                },
            },
            '.intro-video': {
                'padding-top': 40 * scale,
                '.intro-video-wrapper': {
                    'padding-top': 20 * scale,
                    'padding-bottom': 40 * scale,
                    '.video-container': {
                        'padding-top': 30 * scale,
                    },
                    '.video-title': {
                        'padding-right': 15 * scale,
                        'padding-left': 15 * scale,
                        'margin-left': 15 * scale,
                        'margin-right': 15 * scale,
                        'margin-bottom': 10 * scale,
                        'margin-top': 20 * scale,
                        'font-size': 18 * scale,
                    },
                    '.video-info': {
                        '.view': {
                            'width': 150 * scale,
                            'padding-left': 30 * scale,
                            'font-size': 12 * scale,
                            '&:before': {
                                'font-size': 14 * scale,
                            }
                        },
                        '.created': {
                            'width': 150 * scale,
                            'padding-left': 30 * scale,
                            'font-size': 12 * scale,
                            '&:before': {
                                'font-size': 14 * scale,
                            }
                        },
                    }
                },
            },
            '.intro-feedback': {
                'padding-top': 40 * scale,
                '.intro-feedback-wrapper': {
                    'margin-top': 40 * scale,
                    '.feedback-img-slider': {
                        'width': 900 * scale,
                        'padding-left': 40 * scale,
                        'padding-right': 40 * scale,
                        '.slick-list': {
                            'height': 220 * scale,
                            'padding-top': 40 * scale + 'px !important',
                        },
                        '.item': {
                            width: 130 * scale,
                            height: 130 * scale,
                            'margin-left': 20 * scale,
                            'margin-right': 20 * scale,
                        }
                    },
                    '.feedback-content-slider': {
                        '.item': {
                            '.client-name': {
                                'margin-top': 15 * scale,
                                'margin-bottom': 15 * scale,
                                'font-size': 20 * scale,
                            },
                            '.star-wrapper': {
                                ul: {
                                    li: {
                                        'margin-left': 15 * scale,
                                        'margin-right': 15 * scale,
                                        i: {
                                            'font-size': 20 * scale,
                                        }
                                    }
                                }
                            },
                            '.client-content': {
                                'width': 800 * scale,
                                'font-size': 16 * scale,
                                'letter-spacing': 1 * scale,
                                '.text-content': {
                                    'padding-top': 5 * scale,
                                    'padding-bottom': 5 * scale,
                                    'padding-left': 15 * scale,
                                    'padding-right': 15 * scale,
                                },
                                '&:before': {
                                    'font-size': 30 * scale,
                                    'left': -10 * scale,
                                    'top': -10 * scale,
                                },
                                '&:before': {
                                    'font-size': 30 * scale,
                                    'right': -10 * scale,
                                    'bottom': -10 * scale,
                                }
                            }
                        }
                    }
                }
            },
            '.intro-partner': {
                'padding-top': 30 * scale,
                'padding-bottom': 20 * scale,
                '.intro-partner-slider': {
                    'padding-left': 60 * scale,
                    'padding-right': 60 * scale,
                    'margin-top': 15 * scale,
                    'margin-bottom': 15 * scale,
                    '.item': {
                        'margin-left': 10 * scale,
                        'margin-right': 10 * scale,
                    },
                    '.slick-prev': {
                        height: 50 * scale,
                        width: 50 * scale,
                        left: -5 * scale,
                        '&:before': {
                            'font-size': 50 * scale,
                            'margin-left': 5 * scale,
                        }
                    },
                    '.slick-next': {
                        height: 50 * scale,
                        width: 50 * scale,
                        right: -5 * scale,
                        '&:before': {
                            'font-size': 50 * scale,
                            'margin-left': 5 * scale,
                        }
                    },
                }
            },
            '.news': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.news-container': {
                    'margin-top': 40 * scale,
                    '.news-tab': {
                        h2: {
                            'font-size': 28 * scale,
                            'padding-left': 35 * scale,
                            '&:before': {
                                'top': -20 * scale,
                                'font-size': 60 * scale,
                            }
                        }
                    },
                    '.news-list-wrapper': {
                        'margin-top': 20 * scale,
                        'margin-bottom': 20 * scale,
                        '.item': {
                            'width': 320 * scale,
                            '.item-date': {
                                'height': 65 * scale,
                                'border-width': 5 * scale,
                                '.date-wrapper': {
                                    'width': 80 * scale,
                                    'border-width': 5 * scale,
                                    '.motnh': {
                                        'width': 60 * scale,
                                        'height': 35 * scale,
                                        'font-size': 25 * scale,
                                        'border-width': 1 * scale,
                                    },
                                    '.year': {
                                        'width': 60 * scale,
                                        'height': 20 * scale,
                                        'font-size': 14 * scale,
                                    }
                                }
                            },
                            '.item-title': {
                                'height': 60 * scale,
                                'padding-left': 5 * scale,
                                'padding-right': 5 * scale,
                                h1: {
                                    'font-size': 18 * scale,
                                }
                            },
                            '.item-description': {
                                'padding-top': 10 * scale,
                                'padding-bottom': 8 * scale,
                                'padding-left': 5 * scale,
                                'padding-right': 5 * scale,
                                'font-size': 15 * scale,
                            },
                            '.readmore': {
                                'height': 30 * scale,
                                'padding-left': 15 * scale,
                                'padding-right': 15 * scale,
                                '&:before': {
                                    'left': -20 * scale,
                                    'width': 24 * scale,
                                    'height': 24 * scale,
                                    'line-height': 23 * scale,
                                    'font-size': 18 * scale,
                                }
                            }
                        }
                    }
                }
            },
            '.news-list': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.news-list-wrapper': {
                    'padding-top': 40 * scale,
                    '.news-list-title': {
                        'font-size': 24 * scale,
                    },
                    '.news-list-item': {
                        'padding-top': 40 * scale,
                        '.item': {
                            'height': 220 * scale,
                            'margin-bottom': 40 * scale,
                            '.item-image': {
                                width: 450 * scale,
                                img: {
                                    height: 220 * scale,
                                }
                            },
                            '.item-content': {
                                'width': 580 * scale,
                                'border-width': 1 * scale,
                                '.item-date': {
                                    'height': 80 * scale,
                                    'width': 80 * scale,
                                    'border-width': 6 * scale,
                                    '.motnh': {
                                        'width': 70 * scale,
                                        'font-size': 30 * scale,
                                        'border-width': 1 * scale,
                                    },
                                    '.year': {
                                        'width': 70 * scale,
                                        'font-size': 16 * scale,
                                    }
                                },
                                '.item-info': {
                                    'border-width': 1 * scale,
                                    '.item-name': {
                                        'font-size': 22 * scale,
                                        'padding-top': 5 * scale,
                                        'padding-bottom': 5 * scale,
                                    },
                                    '.item-description': {
                                        'font-size': 14 * scale,
                                    },
                                    '.readmore': {
                                        'height': 30 * scale,
                                        'padding-left': 15 * scale,
                                        'padding-right': 15 * scale,
                                        '&:before': {
                                            'left': -20 * scale,
                                            'top': 0 * scale,
                                            'width': 24 * scale,
                                            'height': 24 * scale,
                                            'line-height': 23 * scale,
                                            'font-size': 18 * scale,
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
            '.news-detail': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.news-detail-wrapper': {
                    'margin-top': 40 * scale,
                    '.other-news-wrapper': {
                        '.other-news-title': {
                            'font-size': 20 * scale,
                        },
                        '.other-news-nav': {
                            'padding-top': 30 * scale,
                            'padding-bottom': 30 * scale,
                            '.nav-center': {
                                'width': 50 * scale,
                                '.slick-next': {
                                    'height': 40 * scale,
                                    'width': 40 * scale,
                                    '&:before': {
                                        'font-size': 40 * scale,
                                        'left': 10 * scale,
                                        'margin-left': 5 * scale,
                                    }
                                },
                                '.slick-prev': {
                                    'height': 40 * scale,
                                    'width': 40 * scale,
                                    '&:before': {
                                        'font-size': 40 * scale,
                                        'left': 10 * scale,
                                        'margin-right': 5 * scale,
                                    }
                                }
                            }
                        },
                        '.other-news-slider': {
                            '.list-item': {
                                '.item': {
                                    'margin-bottom': 20 * scale,
                                    '.item-date': {
                                        'height': 60 * scale,
                                        'width': 60 * scale,
                                        'border-width': 6 * scale,
                                        '.motnh': {
                                            'width': 50 * scale,
                                            'font-size': 25 * scale,
                                            'border-width': 1 * scale,
                                        },
                                        '.year': {
                                            'width': 50 * scale,
                                            'font-size': 14 * scale,
                                        }
                                    },
                                    '.item-title': {
                                        'padding-top': 5 * scale,
                                        'margin-bottom': 10 * scale,
                                        'min-height': 55 * scale,
                                        'border-width': 4 * scale,
                                        a: {
                                            'font-size': 15 * scale,
                                        }
                                    }
                                }
                            }
                        }
                    },
                    '.news-detail-content': {
                        '.news-detail-title': {
                            'font-size': 22 * scale,
                            'margin-bottom': 20 * scale,
                            h1: {
                                'font-size': 22 * scale,
                            }
                        },
                        '.news-created': {
                            'width': 100 * scale,
                            'height': 90 * scale,
                            'border-top-width': 7 * scale,
                            'border-bottom-width': 3 * scale,
                            '.month': {
                                'width': 65 * scale,
                                'height': 40 * scale,
                                'font-size': 40 * scale,
                                'border-width': 1 * scale,
                                '.month-value': {
                                    'width': 65 * scale,
                                    'top': -10 * scale,
                                }
                            },
                            '.year': {
                                'width': 65 * scale,
                                'height': 40 * scale,
                                'font-size': 20 * scale,
                            }
                        },
                        '.short-description': {
                            'font-size': 16 * scale,
                        },
                        '.text-content': {
                            'margin-top': 30 * scale,
                        }
                    }
                }
            },
            '.contact-us': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '#map_canvas': {
                    'margin-top': 50 * scale,
                    'height': 400 * scale,
                },
                '.contact-form': {
                    'padding-top': 50 * scale,
                    '.form-container': {
                        width: 990 * scale,
                        label: {
                            'font-size': 16 * scale,
                        },
                        input: {
                            'margin-top': 5 * scale,
                            'margin-bottom': 15 * scale,
                            'font-size': 16 * scale,
                            height: 34 * scale,
                        },
                        '.form-control': {
                            'padding-top': 6 * scale,
                            'padding-bottom': 6 * scale,
                            'padding-left': 12 * scale,
                            'padding-right': 12 * scale,
                        },
                        textarea: {
                            'margin-top': 5 * scale,
                            'margin-bottom': 15 * scale,
                            height: 186 * scale,
                            'font-size': 16 * scale,
                        }
                    }
                }
            },
            '.promotion': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.item': {
                    'width': 480 * scale,
                    'height': 610 * scale,
                    'margin-top': 40 * scale,
                    'margin-bottom': 40 * scale,
                    '.item-title': {
                        'width': 400 * scale,
                        'height': 110 * scale,
                        'border-width': 3 * scale,
                        'border-top-right-radius': 15 * scale,
                        'border-top-left-radius': 15 * scale,
                        'padding': 20 * scale,
                        h2: {
                            'font-size': 23 * scale,
                        }
                    },
                    '.item-image': {
                        'height': 330 * scale,
                        'top': 100 * scale,
                        'left': -5 * scale,
                        img: {
                            'border-radius': 20 * scale,
                        },
                    },
                    '.item-content': {
                        'width': 400 * scale,
                        'height': 230 * scale,
                        'border-bottom-right-radius': 15 * scale,
                        'border-bottom-left-radius': 15 * scale,
                        'border-width': 2 * scale,
                        '.item-description': {
                            'width': 370 * scale,
                            'margin-top': 45 * scale,
                            'padding': 20 * scale,
                            'height': 135 * scale,
                            'border-bottom-left-radius': 15 * scale,
                            'border-bottom-right-radius': 15 * scale,
                            'font-size': 15 * scale,
                            'border-width': 2.5 * scale,
                            '&:before': {
                                'left': 'calc(100% + ' + scale + 'px)',
                                'border-right-width': 79 * scale,
                                'border-top-width': 110 * scale,
                            }
                        },
                        '.readmore': {
                            'height': 40 * scale,
                            'padding-top': 13 * scale,
                            'padding-left': 15 * scale,
                            'padding-right': 15 * scale,
                            '&:before': {
                                'left': -20 * scale,
                                'top': 13 * scale,
                                'width': 24 * scale,
                                'height': 24 * scale,
                                'line-height': 23 * scale,
                                'font-size': 18 * scale,
                            }
                        }
                    }
                }
            },
            '.promotion-detail': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.title': {
                    'width': 300 * scale,
                    h1: {
                        'width': 200 * scale,
                    }
                },
                '.promotion-wrapper': {
                    'margin-top': 50 * scale,
                    '.other-promotion-title': {
                        'font-size': 18 * scale,
                    },
                    '.other-promotion-nav': {
                        'padding-top': 30 * scale,
                        'padding-bottom': 30 * scale,
                        '.slick-next': {
                            height: 40 * scale,
                            width: 40 * scale,
                            right: 10 * scale,
                            '&:before': {
                                'margin-left': 5 * scale,
                            }
                        },
                        '.slick-prev': {
                            height: 40 * scale,
                            width: 40 * scale,
                            right: 60 * scale,
                            '&:before': {
                                'margin-right': 5 * scale,
                            }
                        }
                    },
                    '.other-promotion-list': {
                        '.list-item': {
                            'padding-left': 1 * scale,
                            'padding-right': 1 * scale,
                            '.item': {
                                'height': 280 * scale,
                                'margin-bottom': 20 * scale,
                                img: {
                                    width: 280 * scale,
                                },
                                '.item-content': {
                                    'top': 70 * scale,
                                    'height': 210 * scale,
                                    'border-radius': 20 * scale,
                                    'border-width': 2 * scale,
                                    '.item-title': {
                                        'width': 280 * scale,
                                        'height': 80 * scale,
                                        'margin-top': 135 * scale,
                                        a: {
                                            'font-size': 16 * scale,
                                        }
                                    }
                                }
                            }
                        }
                    },
                    '.promotion-title': {
                        'height': 60 * scale,
                        h1: {
                            'font-size': 22 * scale,
                        }
                    },
                    '.promotion-description': {
                        'margin-bottom': 20 * scale,
                        '.promotion-created': {
                            'height': 90 * scale,
                            'border-top-width': 7 * scale,
                            'border-bottom-width': 3 * scale,
                            '.month': {
                                'width': 65 * scale,
                                'height': 40 * scale,
                                'font-size': 40 * scale,
                                'border-bottom-width': 1 * scale,
                                '.month-value': {
                                    width: 65 * scale,
                                    top: -10 * scale,
                                }
                            },
                            '.year': {
                                'width': 65 * scale,
                                'height': 40 * scale,
                                'font-size': 20 * scale,
                            }
                        },
                        '.promotion-short-description': {
                            'font-size': 16 * scale,
                        }
                    }
                }
            },
            '.service': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.service-group': {
                    'margin-top': 40 * scale,
                    '.item': {
                        'width': 515 * scale,
                        'height': 200 * scale,
                        'margin-bottom': 40 * scale,
                        '.item-image': {
                            width: 200 * scale,
                            height: 200 * scale,
                            padding: 25 * scale,
                            img: {
                                'border-width': 5 * scale,
                                'box-shadow': '0 0 0 ' + 23 * scale + 'px #fff',
                            },
                            '.border-circle': {
                                'border-width': 2 * scale,
                            }
                        },
                        '.item-content': {
                            'width': 370 * scale,
                            'height': 170 * scale,
                            'padding-left': 70 * scale,
                            'padding-right': 40 * scale,
                            'top': 15 * scale,
                            'left': 155 * scale,
                            'border-top-right-radius': 25 * scale,
                            'border-bottom-right-radius': 25 * scale,
                            '.item-title': {
                                'padding-top': 10 * scale,
                                a: {
                                    'font-size': 17 * scale,
                                }
                            },
                            '.item-list': {
                                ul: {
                                    'padding-left': 10 * scale,
                                    li: {
                                        'font-size': 15 * scale,
                                        a: {
                                            'font-size': 10 * scale,
                                        }
                                    }
                                }
                            },
                            '.readmore': {
                                'height': 20 * scale,
                                'padding-left': 5 * scale,
                                'font-size': 13 * scale,
                                '&:before': {
                                    'left': -20 * scale,
                                    'top': 0 * scale,
                                    'width': 20 * scale,
                                    'height': 20 * scale,
                                    'line-height': 18 * scale,
                                    'font-size': 16 * scale,
                                }
                            }
                        }
                    }
                }
            },
            '.service-list': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.service-group-name': {
                    'font-size': 24 * scale,
                    'padding-top': 30 * scale,
                },
                '.service-list-wrapper': {
                    'margin-top': 40 * scale,
                    '.item': {
                        'min-height': 390 * scale,
                        'margin-bottom': 15 * scale,
                        '.item-image': {
                            'border-radius': 20 * scale,
                            'border-width': 2.5 * scale,
                            '.item-caption': {
                                'padding-top': 8 * scale,
                                'padding-left': 15 * scale,
                                'padding-right': 15 * scale,
                                'font-size': 17 * scale,
                            }
                        },
                        '.item-description': {
                            'margin-top': 20 * scale,
                            'font-size': 14 * scale,
                        },
                        '.readmore': {
                            'height': 20 * scale,
                            'margin-top': 10 * scale,
                            'padding-left': 5 * scale,
                            'font-size': 13 * scale,
                            '&:before': {
                                'left': -20 * scale,
                                'top': 0 * scale,
                                'width': 20 * scale,
                                'height': 20 * scale,
                                'line-height': 18 * scale,
                                'font-size': 16 * scale,
                            }
                        }
                    }
                }
            },
            '.service-detail': {
                'padding-top': 80 * scale,
                'padding-bottom': 80 * scale,
                '.service-detail-wrapper': {
                    'margin-top': 40 * scale,
                    '.other-service-wrapper': {
                        'margin-top': 2 * scale,
                        'width': 320 * scale,
                        '.other-service-title': {
                            'font-size': 19 * scale,
                            span: {
                                '&:before': {
                                    'height': 5 * scale,
                                    'width': 40 * scale,
                                    'bottom': -5 * scale,
                                }
                            }
                        },
                        '.other-service-nav': {
                            'margin-top': 30 * scale,
                            'margin-bottom': 10 * scale,
                            'height': 60 * scale,
                            '.slick-next': {
                                'height': 60 * scale,
                                'width': 20 * scale,
                                'right': 10 * scale,
                                '&:before': {
                                    'font-size': 60 * scale,
                                    'left': 10 * scale,
                                    'margin-left': 5 * scale,
                                }
                            },
                            '.slick-prev': {
                                'height': 60 * scale,
                                'width': 20 * scale,
                                'right': 40 * scale,
                                '&:before': {
                                    'font-size': 60 * scale,
                                    'left': 10 * scale,
                                    'margin-right': 5 * scale,
                                }
                            }
                        },
                        '.other-service-list': {
                            '.list-item': {
                                '.item': {
                                    'margin-bottom': 30 * scale,
                                    '.item-caption': {
                                        'height': 50 * scale,
                                        'padding-left': 85 * scale,
                                        'padding-top': 2 * scale,
                                        'padding-right': 20 * scale,
                                        'border-width': 2 * scale,
                                        a: {
                                            'font-size': 15 * scale,
                                        },
                                        i: {
                                            'height': 75 * scale,
                                            'width': 75 * scale,
                                            'left': -2 * scale,
                                            'bottom': -1 * scale,
                                            'border-width': 3 * scale,
                                            '&:before': {
                                                'width': 54 * scale,
                                                'height': 28 * scale,
                                                'left': 5 * scale,
                                                'bottom': 5 * scale,
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    '.service-detail-title': {
                        'font-size': 24 * scale,
                        'padding-left': 30 * scale,
                        '&:before': {
                            'font-size': 50 * scale,
                            'top': -22 * scale,
                        }
                    },
                    '.service-name-wrapper': {
                        '.service-name': {
                            'font-size': 24 * scale,
                            span: {
                                '&:before': {
                                    'width': 60 * scale,
                                    'height': 5 * scale,
                                    'bottom': -5 * scale,
                                }
                            }
                        },
                        '.service-name-text': {
                            'margin-top': 20 * scale,
                        }
                    },
                    '.effective': {
                        'margin-top': 50 * scale,
                        '.effective-left': {
                            'padding-top': 25 * scale,
                            '.effective-text-content': {
                                'height': 250 * scale,
                            }
                        },
                        '.effective-right': {
                            'padding-top': 25 * scale,
                            'figcaption': {
                                'margin-top': 10 * scale,
                            }
                        }
                    },
                    '.effective-image': {
                        'margin-top': 50 * scale,
                        '.effective-image-slider': {
                            'margin-top': 40 * scale,
                            'width': 960 * scale,
                            'padding-right': 50 * scale,
                            'padding-left': 50 * scale,
                            '.item': {
                                'padding-left': 5 * scale,
                                'padding-right': 5 * scale,
                                'figcaption': {
                                    'margin-top': 15 * scale,
                                    'margin-bottom': 20 * scale,
                                }
                            },
                            '.slick-next': {
                                'height': 50 * scale,
                                'width': 50 * scale,
                                'right': -20 * scale,
                                '&:before': {
                                    'font-size': 50 * scale,
                                    'left': 10 * scale,
                                    'margin-left': 5 * scale,
                                }
                            },
                            '.slick-prev': {
                                'height': 50 * scale,
                                'width': 50 * scale,
                                'left': -20 * scale,
                                '&:before': {
                                    'font-size': 50 * scale,
                                    'left': 10 * scale,
                                    'margin-right': 5 * scale,
                                }
                            }
                        }
                    },
                    '.technology': {
                        'margin-top': 50 * scale,
                        '.technology-left': {
                            'padding-top': 25 * scale,
                            'figcaption': {
                                'margin-top': 10 * scale,
                            }
                        },
                        '.technology-right': {
                            'padding-top': 25 * scale,
                            '.technology-text-content': {
                                'height': 250 * scale,
                            }
                        }
                    },
                    '.process': {
                        'margin-top': 50 * scale,
                        '.process-map': {
                            'margin-top': 35 * scale,
                            'width': 960 * scale,
                            '.item': {
                                'width': 380 * scale,
                                'height': 120 * scale,
                                'margin-bottom': 50 * scale,
                                '.number': {
                                    'top': -60 * scale,
                                    'left': -65 * scale,
                                    'font-size': 170 * scale,
                                    i: {
                                        'text-shadow': 5 * scale + 'px ' + 5 * scale + 'px ' + 15 * scale + 'px ' + 'rgba(0, 0,0 ,0.5)',
                                    }
                                },
                                '.content': {
                                    'width': 300 * scale,
                                    'padding-top': 30 * scale,
                                    'padding-left': 35 * scale,
                                    'padding-right': 70 * scale,
                                    'font-size': 14 * scale,
                                    span: {
                                        '&:before': {
                                            'width': 50 * scale,
                                            'height': 10 * scale,
                                            'top': 10 * scale,
                                            'left': 30 * scale,
                                        }
                                    }
                                },
                                '.image': {
                                    'width': 120 * scale,
                                    'height': 120 * scale,
                                    img: {
                                        'box-shadow': '0 0 0 ' + 15 * scale + 'px #fff',
                                    }
                                }
                            }
                        }
                    },
                    '.feedback': {
                        'margin-top': 50 * scale,
                        'height': 550 * scale,
                        '.feedback-wrapper': {
                            'margin-top': 30 * scale,
                            'padding-top': 200 * scale,
                            '&:before': {
                                'height': 400 * scale,
                            },
                            '.item': {
                                'width': 440 * scale,
                                'padding-top': 80 * scale,
                                'border-radius': 25 * scale,
                                'border-width': 3 * scale,
                                '.image': {
                                    'border-width': 5 * scale,
                                    'width': 220 * scale,
                                    'height': 220 * scale,
                                    'top': -150 * scale,
                                    'margin-left': -110 * scale,
                                },
                                '.item-name': {
                                    'font-size': 18 * scale,
                                },
                                '.star-wrapper': {
                                    ul: {
                                        li: {
                                            'margin-left': 3 * scale,
                                            'margin-left': 3 * scale,
                                            i: {
                                                'font-size': 10 * scale,
                                            }
                                        }
                                    }
                                },
                                '.item-content': {
                                    'padding-left': 23 * scale,
                                    'padding-right': 23 * scale,
                                    'font-size': 16 * scale,
                                }
                            }
                        }
                    },
                    '.why-chose': {
                        'margin-top': 50 * scale,
                        '.why-chose-content': {
                            'width': 900 * scale,
                            'margin-top': 20 * scale,
                        }
                    },
                    '.note': {
                        'margin-top': 50 * scale,
                        '.note-wrapper': {
                            'width': 1100 * scale,
                            '.note-content-wrapper': {
                                'width': 800 * scale,
                                'padding': 30 * scale,
                                'border-radius': 15 * scale,
                                'border-width': 2 * scale,
                                p: {
                                    'margin-bottom': 10 * scale,
                                    '&:before': {
                                        'left': -30 * scale,
                                        'margin-left': -13 * scale,
                                        'width': 26 * scale,
                                        'height': 26 * scale,
                                        'border-width': 3 * scale,
                                    }
                                }
                            },
                            '.note-btn-wrapper': {
                                left: -20 * scale,
                            }
                        }
                    },
                    '.btn-wrapper': {
                        'margin-top': 15 * scale,
                        '.btn-icon': {
                            height: 44 * scale,
                            'border-radius': 22 * scale,
                            'padding-left': 50 * scale,
                            'padding-right': 40 * scale,
                            'padding-top': 5 * scale,
                            'margin-right': 20 * scale,
                            'border-width': 2 * scale,
                            'font-size': 13 * scale,
                            span: {
                                width: 30 * scale,
                                height: 30 * scale,
                                left: 6 * scale,
                                top: 6 * scale,
                                '&:before': {
                                    width: 30 * scale,
                                    height: 30 * scale,
                                    left: 6 * scale,
                                    top: 6 * scale,
                                }
                            },
                            '&:before': {
                                width: 22 * scale,
                                height: 45 * scale,
                                left: -1 * scale,
                                top: -2 * scale,
                                'border-top-left-radius': 22 * scale,
                                'border-bottom-left-radius': 22 * scale,
                            },
                            '&:after': {
                                width: 22 * scale,
                                height: 45 * scale,
                                left: 21 * scale,
                                top: -2 * scale,
                                'border-top-right-radius': 22 * scale,
                                'border-bottom-right-radius': 22 * scale,
                            }
                        }
                    }
                }
            },
            '.gallery': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.album-wrapper': {
                    'margin-top': 40 * scale,
                    '.album-wrapper-title': {
                        'height': 60 * scale,
                        'padding-left': 150 * scale,
                        'padding-top': 15 * scale,
                        a: {
                            'font-size': 24 * scale,
                            '&:before': {
                                height: 60 * scale,
                                width: 60 * scale,
                                left: 65 * scale,
                            }
                        }
                    },
                    '.album-slider': {
                        'margin-top': 20 * scale,
                        'padding-left': 50 * scale,
                        'padding-right': 50 * scale,
                        '.item': {
                            'margin-left': 15 * scale,
                            'margin-right': 15 * scale,
                            '.item-caption': {
                                'padding-top': 15 * scale,
                                'padding-bottom': 15 * scale,
                                a: {
                                    'font-size': 16 * scale,
                                }
                            }
                        },
                        '.slick-next': {
                            'height': 40 * scale,
                            'width': 40 * scale,
                            'right': -1 * scale,
                            '&:before': {
                                'font-size': 40 * scale,
                                'left': 10 * scale,
                                'margin-left': 5 * scale,
                            }
                        },
                        '.slick-prev': {
                            'height': 40 * scale,
                            'width': 40 * scale,
                            'left': -1 * scale,
                            '&:before': {
                                'font-size': 40 * scale,
                                'left': 10 * scale,
                                'margin-right': 5 * scale,
                            }
                        }
                    }
                },
                '.video-wrapper': {
                    'margin-top': 40 * scale,
                    '.video-wrapper-title': {
                        'height': 60 * scale,
                        'padding-left': 150 * scale,
                        'padding-top': 15 * scale,
                        a: {
                            'font-size': 24 * scale,
                            '&:before': {
                                'height': 60 * scale,
                                'width': 60 * scale,
                                'left': 65 * scale,
                            }
                        }
                    },
                    '.video-slider': {
                        'margin-top': 20 * scale,
                        'padding-left': 50 * scale,
                        'padding-right': 50 * scale,
                        '.item': {
                            'margin-left': 15 * scale,
                            'margin-right': 15 * scale,
                            '.item-image': {
                                a: {
                                    '&:before': {
                                        'margin-top': -35 * scale,
                                        'margin-left': -35 * scale,
                                        'width': 70 * scale,
                                        'height': 70 * scale,
                                    }
                                }
                            },
                            '.item-caption': {
                                'margin-top': 10 * scale,
                                'padding-left': 30 * scale,
                                'height': 50 * scale,
                                '&:before': {
                                    'border-left-width': 16 * scale,
                                    'border-top-width': 16 * scale,
                                    'top': 5 * scale,
                                },
                                a: {
                                    'font-size': 13 * scale,
                                }
                            },
                            '.item-info': {
                                '.view': {
                                    'padding-left': 30 * scale,
                                    'font-size': 12 * scale,
                                    '&:before': {
                                        'font-size': 14 * scale,
                                    }
                                },
                                '.created': {
                                    'padding-left': 30 * scale,
                                    'font-size': 12 * scale,
                                    '&:before': {
                                        'font-size': 14 * scale,
                                    }
                                }
                            }
                        },
                        '.slick-next': {
                            'height': 40 * scale,
                            'width': 40 * scale,
                            'right': -1 * scale,
                            '&:before': {
                                'font-size': 40 * scale,
                                'left': 10 * scale,
                                'margin-left': 5 * scale,
                            }
                        },
                        '.slick-prev': {
                            'height': 40 * scale,
                            'width': 40 * scale,
                            'left': -1 * scale,
                            '&:before': {
                                'font-size': 40 * scale,
                                'left': 10 * scale,
                                'margin-right': 5 * scale,
                            }
                        }
                    }
                }
            },
            '.gallery-album': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.album-list': {
                    'margin-top': 40 * scale,
                    '.item': {
                        'margin-bottom': 20 * scale,
                        '.item-image': {},
                        '.item-info': {
                            'min-height': 50 * scale,
                            'margin-top': 10 * scale,
                            a: {
                                'font-size': 16 * scale,
                            }
                        }
                    }
                }
            },
            '.gallery-image': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.album-detail': {
                    'margin-top': 40 * scale,
                    '.item': {
                        'width': 260 * scale,
                        'height': 260 * scale,
                        'margin-bottom': 30 * scale,
                    }
                },
                '.other-album-title': {
                    'margin-top': 30 * scale,
                },
                '.other-album': {
                    'margin-top': 20 * scale,
                    'padding-left': 50 * scale,
                    'padding-right': 50 * scale,
                    '.item': {
                        'margin-left': 15 * scale,
                        'margin-right': 15 * scale,
                        '.item-caption': {
                            'padding-top': 15 * scale,
                            'padding-bottom': 15 * scale,
                            a: {
                                'font-size': 16 * scale,
                            }
                        }
                    },
                    '.slick-next': {
                        'height': 50 * scale,
                        'width': 50 * scale,
                        'right': -1 * scale,
                        '&:before': {
                            'font-size': 50 * scale,
                            'left': 10 * scale,
                            'margin-left': 5 * scale,
                        }
                    },
                    '.slick-prev': {
                        'height': 50 * scale,
                        'width': 50 * scale,
                        'left': -1 * scale,
                        '&:before': {
                            'font-size': 50 * scale,
                            'left': 10 * scale,
                            'margin-right': 5 * scale,
                        }
                    }
                }
            },
            '.gallery-video': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.video-detail': {
                    'padding-top': 40 * scale,
                    '.item': {
                        'margin-bottom': 40 * scale,
                        '.item-image': {
                            a: {
                                '&:before': {
                                    'margin-top': -35 * scale,
                                    'margin-left': -35 * scale,
                                    'width': 70 * scale,
                                    'height': 70 * scale,
                                }
                            }
                        },
                        '.item-caption': {
                            'margin-top': 10 * scale,
                            'padding-left': 30 * scale,
                            'height': 50 * scale,
                            '&:before': {
                                'border-left-width': 16 * scale,
                                'border-top-width': 16 * scale,
                                'top': 5 * scale,
                            },
                            a: {
                                'font-size': 13 * scale,
                            }
                        },
                        '.item-info': {
                            '.view': {
                                'padding-left': 30 * scale,
                                'font-size': 12 * scale,
                                '&:before': {
                                    'font-size': 14 * scale,
                                }
                            },
                            '.created': {
                                'padding-left': 30 * scale,
                                'font-size': 12 * scale,
                                '&:before': {
                                    'font-size': 14 * scale,
                                }
                            }
                        }
                    }
                }
            },
            '.price-list': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.price-list-container': {
                    'padding-top': 40 * scale,
                    '.panel-group': {
                        'border-width': 2 * scale,
                        '.panel-header': {
                            height: 110 * scale,
                            '.circle': {
                                width: 150 * scale,
                                height: 150 * scale,
                                top: -100 * scale,
                                'margin-left': -75 * scale,
                            },
                            '.rectangle': {
                                'border-radius': 25 * scale,
                                'border-width': 3 * scale,
                            },
                            '.big-circle': {
                                width: 190 * scale,
                                height: 190 * scale,
                                'margin-left': -95 * scale,
                                top: -120 * scale,
                                'border-width': 3 * scale,
                            }
                        }
                    },
                    '.panel-price': {
                        'border-width': 2 * scale,
                        '&.active': {
                            '.panel-heading': {
                                '.panel-title': {
                                    a: {
                                        'height': 46 * scale,
                                        'top': 15 * scale,
                                        'padding-top': 10 * scale,
                                        'border-top-right-radius': 8 * scale,
                                        'border-top-left-radius': 8 * scale,
                                        'border-width': 5 * scale,
                                        span: {
                                            '&:before': {
                                                'border-top-right-radius': 8 * scale,
                                                'border-top-left-radius': 8 * scale,
                                                'border-width': 5 * scale,
                                            },
                                            '&:after': {
                                                left: 15 * scale,
                                                bottom: -8 * scale,
                                                height: 5 * scale,
                                                width: 70 * scale,
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        '.panel-heading': {
                            height: 46 * scale,
                            '.panel-title': {
                                a: {
                                    'font-size': 24 * scale,
                                    'margin-left': 100 * scale,
                                    'padding-left': 5 * scale,
                                    'padding-right': 5 * scale,
                                    span: {
                                        'padding-left': 5 * scale,
                                        'padding-right': 5 * scale,
                                    }
                                }
                            }
                        },
                        '.panel-body': {
                            'padding-top': 30 * scale,
                            table: {
                                width: 880 * scale,
                                tbody: {
                                    width: 880 * scale,
                                    'padding-left': 20 * scale,
                                    tr: {
                                        'margin-bottom': 15 * scale,
                                        'border-width': 2 * scale,
                                        td: {
                                            'font-size': 20 * scale,
                                            'width': 150 * scale,
                                            '&:first-child': {
                                                width: 430 * scale,
                                            }
                                        },
                                        '&:first-child': {
                                            td: {
                                                'font-size': 25 * scale,
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
            '.introduce': {
                'padding-top': 80 * scale,
                'padding-bottom': 40 * scale,
                '.introduce-wrapper': {
                    '.intro-text': {
                        'margin-top': 30 * scale,
                        '.intro-text-container': {
                            'width': 650 * scale,
                            'font-size': 15 * scale,
                            'line-height': 2 * scale + ' rem',
                        }
                    },
                    '.intro-place': {
                        'margin-top': 40 * scale,
                        '.intro-place-container': {
                            'margin-top': 40 * scale,
                            '.intro-place-left': {
                                '.intro-place-left-wrapper': {
                                    'margin-top': 100 * scale,
                                    'width': 440 * scale,
                                    'min-height': 1 * scale,
                                    'padding-top': 35 * scale,
                                    'padding-bottom': 30 * scale,
                                    'padding-left': 5 * scale,
                                    'padding-right': 5 * scale,
                                    'border-width': 3 * scale,
                                    '.intro-place-text': {
                                        'font-size': 15 * scale,
                                        'line-height': 2 * scale + ' rem',
                                    },
                                    '&:before': {
                                        width: 105 * scale,
                                        height: 91 * scale,
                                        top: -70 * scale,
                                        left: 75 * scale,
                                    }
                                }
                            },
                            '.intro-place-right': {
                                '.intro-place-right-wrapper': {
                                    'width': 540 * scale,
                                    'height': 465 * scale,
                                    '.image-01': {
                                        ' width': 300 * scale,
                                        'left': 200 * scale,
                                        'img': {
                                            'border-radius': 15 * scale,
                                            'border-width': 5 * scale,
                                        }
                                    },
                                    '.image-02': {
                                        ' width': 269 * scale,
                                        'top': 60 * scale,
                                        'img': {
                                            'border-radius': 15 * scale,
                                            'border-width': 5 * scale,
                                        }
                                    },
                                    '.image-03': {
                                        ' width': 200 * scale,
                                        'top': 225 * scale,
                                        'left': 325 * scale,
                                        'img': {
                                            'border-radius': 15 * scale,
                                            'border-width': 5 * scale,
                                        }
                                    },
                                    '&:before': {
                                        'border-radius': 15 * scale,
                                    }
                                }
                            }
                        }
                    },
                    '.intro-machine': {
                        'margin-top': 60 * scale,
                        '.intro-machine-container': {
                            'height': 330 * scale,
                            'margin-top': 160 * scale,
                            '.icon-machine-wrapper': {
                                'width': 1020 * scale,
                                '.icon-center': {
                                    'width': 400 * scale,
                                    'height': 400 * scale,
                                    'left': 310 * scale,
                                    'top': -125 * scale,
                                    'border-width': 7 * scale,
                                },
                                '.icon-left': {
                                    width: 300 * scale,
                                    height: 300 * scale,
                                    left: 50 * scale,
                                    top: -75 * scale,
                                    'border-width': 7 * scale,
                                },
                                '.icon-right': {
                                    width: 300 * scale,
                                    height: 300 * scale,
                                    right: 50 * scale,
                                    top: -75 * scale,
                                    'border-width': 7 * scale,
                                }
                            }
                        }
                    },
                    '.intro-text-2': {
                        'margin-top': 30 * scale,
                        '.intro-text-left-container': {
                            '.intro-text-left-wrapper': {
                                'margin-top': 65 * scale,
                                'width': 440 * scale,
                                'min-height': 1 * scale,
                                'padding-top': 35 * scale,
                                'padding-bottom': 30 * scale,
                                'padding-left': 5 * scale,
                                'padding-right': 5 * scale,
                                'border-width': 3 * scale,
                                '.intro-text-content': {
                                    'font-size': 15 * scale,
                                    'line-height': 2 * scale + ' rem',
                                },
                                '&:before': {
                                    width: 105 * scale,
                                    height: 91 * scale,
                                    top: -70 * scale,
                                    left: 75 * scale,
                                }
                            }
                        },
                        '.intro-text-right-container': {
                            'width': 560 * scale,
                            img: {
                                'border-radius': 20 * scale,
                            }
                        }
                    },
                    '.intro-team': {
                        'height': 450 * scale,
                        'margin-top': 70 * scale,
                        '.intro-team-left-container': {
                            '.intro-title': {
                                'margin-top': 35 * scale,
                                'padding-left': 5 * scale,
                                'padding-right': 5 * scale,
                                'margin-right': 90 * scale,
                            },
                            '&:before': {
                                'border-width': 5 * scale,
                                'border-top-left-radius': 25 * scale,
                            }
                        },
                        '.intro-team-right-container': {
                            'box-shadow': '0 ' + 10 * scale + 'px 0 #3ab572',
                            '.intro-team-text': {
                                'width': 520 * scale,
                                'margin-left': 90 * scale,
                                'font-size': 15 * scale,
                                'line-height': 2 * scale + ' rem',
                                '&:before': {
                                    left: -15 * scale,
                                    top: 5 * scale,
                                    height: 50 * scale,
                                    width: 5 * scale,
                                }
                            }
                        },
                        '.intro-team-image': {
                            '.image': {
                                width: 1000 * scale,
                            }
                        }
                    },
                    '.intro-gallery': {
                        'margin-top': 50 * scale,
                        'padding-top': 90 * scale,
                        '.item-image': {
                            'width': 525 * scale,
                            'height': 350 * scale,
                        },
                        '.intro-gallery-btn': {
                            'width': 160 * scale,
                            'height': 160 * scale,
                            'margin-left': -80 * scale,
                            a: {
                                'font-size': 25 * scale,
                            }
                        }
                    }
                }
            }
        }
    })
    $.injectCSS({
        '#videoModal': {
            '.modal-dialog': {
                width: 600 * scale,
                '.modal-content': {
                    '.modal-body': {
                        iframe: {
                            height: 350 * scale,
                        }
                    }
                }
            }
        },
        '#modal-alert': {
            '.modal-dialog': {
                width: 600 * scale,
                '.modal-content': {
                    '.modal-header': {
                        'font-size': 20 * scale,
                    },
                    '.modal-body': {
                        p: {
                            'font-size': 20 * scale,
                        }
                    }
                }
            }
        }
    })
    $.injectCSS({
        '#priceModal': {
            '.modal-dialog': {
                width: 950 * scale,
                '.modal-title': {
                    'font-size': 30 * scale,
                    'padding': 10 * scale,
                }
            },
            table: {
                width: 880 * scale,
                tbody: {
                    width: 880 * scale,
                    'padding-left': 20 * scale,
                    tr: {
                        'margin-bottom': 15 * scale,
                        'border-width': 2 * scale,
                        td: {
                            'font-size': 20 * scale,
                            'width': 150 * scale,
                            '&:first-child': {
                                width: 430 * scale,
                            }
                        },
                        '&:first-child': {
                            td: {
                                'font-size': 25 * scale,
                            }
                        }
                    }
                }
            }
        }
    })
    $.injectCSS({
        '.custom-form': {
            '.modal-dialog': {
                width: 600 * scale,
                '.modal-title': {
                    'font-size': 30 * scale,
                    'padding': 10 * scale,
                },
                '.modal-content': {
                    '.modal-header': {},
                    '.modal-body': {
                        padding: 20 * scale,
                    },
                    '.modal-footer': {}
                }
            },
        },
        '#promotion-modal': {
            '.promotion-description': {
                'font-size': 14 * scale,
                'padding-right': 15 * scale,
                'padding-left': 15 * scale,
            },
            '.modal-dialog': {
                width: 600 * scale,
                '.modal-title': {
                    'font-size': 30 * scale,
                    'padding': 10 * scale,
                },
                '.modal-content': {
                    '.modal-header': {},
                    '.modal-body': {
                        padding: 20 * scale,
                    },
                    '.modal-footer': {
                        'font-size': 14 * scale,
                    }
                }
            },
        }
    })
    $.injectCSS({
        '#scroll-menu': {
            '.menu-wrapper': {
                '.bg-left': {
                    width: 100 * scale,
                },
                '>ul': {
                    'margin-left': 100 * scale,
                    'width': 180 * scale,
                    '>li': {
                        '&:first-child': {
                            'margin-top': 40 * scale,
                        },
                        'margin-bottom': 1 * scale,
                        '>a': {
                            'font-size': 14 * scale,
                            'padding-top': 25 * scale,
                            'padding-bottom': 25 * scale,
                        },
                        '.icon-caret': {
                            '&:before': {
                                'bottom': 28 * scale,
                                'right': -7 * scale,
                                'border-top-width': 14 * scale,
                                'border-left-width': 14 * scale,
                            }
                        },
                        '.submenu': {
                            'padding-top': 25 * scale,
                            'padding-bottom': 25 * scale,
                            '>ul': {
                                'padding-left': 25 * scale,
                                '>li': {
                                    'width': 320 * scale,
                                    'margin-bottom': 10 * scale,
                                    'border-radius': 20 * scale,
                                    'border-width': 2 * scale,
                                    '>a': {
                                        'padding-top': 5 * scale,
                                        'padding-bottom': 5 * scale,
                                        'padding-left': 15 * scale,
                                        'padding-right': 15 * scale,
                                        'font-size': 13 * scale,
                                    },
                                    '.secondsub': {
                                        'width': 575 * scale,
                                        'padding-left': 30 * scale,
                                        'ul': {
                                            'border-width': 2 * scale,
                                            'border-radius': 25 * scale,
                                            'border-radius': 25 * scale,
                                            'padding-left': 40 * scale,
                                            'padding-top': 10 * scale,
                                            'padding-bottom': 10 * scale,
                                            'padding-right': 40 * scale,
                                            'li': {
                                                a: {
                                                    'padding-left': 5 * scale,
                                                    'padding-top': 13 * scale,
                                                    'padding-bottom': 13 * scale,
                                                    'padding-right': 5 * scale,
                                                    'font-size': 14 * scale,
                                                    'border-width': 1 * scale,
                                                }
                                            },
                                            '&:before': {
                                                'left': 20 * scale,
                                                'border-top-width': 20 * scale,
                                                'border-left-width': 20 * scale,
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    '.home': {
                        a: {
                            img: {
                                width: 30 * scale,
                                height: 30 * scale,
                            }
                        }
                    }
                }
            }
        },
        '#btn-menu': {
            width: 65 * scale,
            height: 80 * scale,
            left: -80 * scale,
            'border-top-right-radius': 16 * scale,
            'border-bottom-right-radius': 16 * scale,
            '.title': {
                left: 10 * scale,
                top: 15 * scale,
                'font-size': 14 * scale,
            },
            '.trigger': {
                left: 10 * scale,
                top: 30 * scale,
                height: 40 * scale,
                width: 40 * scale,
                '.icon-bar': {
                    width: 30 * scale,
                    height: 3 * scale,
                    '&:before': {
                        top: -3 * scale,
                        '-webkit-transform': 'translateY(' + -6 * scale + 'px)',
                        '-moz-transform': 'translateY(' + -6 * scale + 'px)',
                        '-ms-transform': 'translateY(' + -6 * scale + 'px)',
                        '-o-transform': 'translateY(' + -6 * scale + 'px)',
                        'transform': 'translateY(' + -6 * scale + 'px)',
                    },
                    '&:after': {
                        top: 3 * scale,
                        '-webkit-transform': 'translateY(' + 6 * scale + 'px)',
                        '-moz-transform': 'translateY(' + 6 * scale + 'px)',
                        '-ms-transform': 'translateY(' + 6 * scale + 'px)',
                        '-o-transform': 'translateY(' + 6 * scale + 'px)',
                        'transform': 'translateY(' + 6 * scale + 'px)',
                    }
                }
            }
        },
        '.btn-subscribe': {
            width: 67 * scale,
            height: 80 * scale,
            left: -67 * scale,
            'border-radius': 12 * scale,
            '.form-title': {
                'font-size': 12 * scale,
            },
            '.form': {
                width: 190 * scale,
                height: 50 * scale,
                top: 15 * scale,
                'padding-left': 10 * scale,
                'padding-top': 5 * scale,
                'padding-bottom': 5 * scale,
                'padding-right': 10 * scale,
                'border-top-right-radius': 10 * scale,
                'border-bottom-right-radius': 10 * scale,
                '.text-field': {
                    height: 22 * scale,
                    width: 'calc(100% - ' + 34 * scale + 'px );'
                },
                '.submit': {
                    height: 22 * scale,
                    width: 32 * scale,
                    'font-size': 12 * scale,
                }
            }
        },    
    })
}

var deviceWidth = $(window).width() - 17;
if(deviceWidth > minWidth) {
    createCss();
}
