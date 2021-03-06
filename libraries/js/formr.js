! function(modules) {
    function __webpack_require__(moduleId) {
        if (installedModules[moduleId]) return installedModules[moduleId].exports;
        var module = installedModules[moduleId] = {
            i: moduleId,
            l: !1,
            exports: {}
        };
        return modules[moduleId].call(module.exports, module, module.exports, __webpack_require__), module.l = !0, module.exports
    }
    var installedModules = {};
    __webpack_require__.m = modules, __webpack_require__.c = installedModules, __webpack_require__.d = function(exports, name, getter) {
        __webpack_require__.o(exports, name) || Object.defineProperty(exports, name, {
            configurable: !1,
            enumerable: !0,
            get: getter
        })
    }, __webpack_require__.n = function(module) {
        var getter = module && module.__esModule ? function() {
            return module.default
        } : function() {
            return module
        };
        return __webpack_require__.d(getter, "a", getter), getter
    }, __webpack_require__.o = function(object, property) {
        return Object.prototype.hasOwnProperty.call(object, property)
    }, __webpack_require__.p = "", __webpack_require__(__webpack_require__.s = 2)
}([function(module, exports, __webpack_require__) {
    "use strict";
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var EMAIL_REGEXP = exports.EMAIL_REGEXP = /(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/,
        isset = exports.isset = function(value) {
            return void 0 !== value && null !== value
        },
        isString = exports.isString = function(value) {
            try {
                return isset(value) && value.constructor && value.constructor === String || "string" == typeof value
            } catch (e) {
                console.error(e)
            }
            return !1
        },
        isNumber = exports.isNumber = function(value) {
            try {
                return isset(value) && value.constructor && value.constructor === Number || "number" == typeof value
            } catch (e) {
                console.error(e)
            }
            return !1
        },
        isBoolean = exports.isBoolean = function(value) {
            try {
                return isset(value) && value.constructor && value.constructor === Boolean || "boolean" == typeof value
            } catch (e) {
                console.error(e)
            }
            return !1
        },
        isEmail = exports.isEmail = function(value) {
            try {
                return isset(value) && EMAIL_REGEXP.test(value)
            } catch (e) {
                console.error(e)
            }
            return !1
        },
        isFunction = exports.isFunction = function(value) {
            try {
                return isset(value) && value.constructor && value.constructor === Function || "function" == typeof value
            } catch (e) {
                console.error(e)
            }
            return !1
        },
        isInt = exports.isInt = function(value) {
            return Boolean(isset(value) && value.length && !isNaN(Number(value)))
        },
        isStr = exports.isStr = function(value) {
            return Boolean(isset(value) && !1 === isInt(value) && isString(value))
        },
        isInputElement = exports.isInputElement = function(field) {
            return field.constructor === HTMLInputElement
        },
        isTextInputElement = exports.isTextInputElement = function(field) {
            return isInputElement(field) && "text" === field.type
        },
        isNumberInputElement = exports.isNumberInputElement = function(field) {
            return isInputElement(field) && "number" === field.type
        },
        isEmailInputElement = exports.isEmailInputElement = function(field) {
            return isInputElement(field) && "email" === field.type
        },
        isDateInputElement = exports.isDateInputElement = function(field) {
            return isInputElement(field) && "date" === field.type
        },
        isCheckboxElement = exports.isCheckboxElement = function(field) {
            return isInputElement(field) && "checkbox" === field.type
        },
        isRadioElement = exports.isRadioElement = function(field) {
            return isInputElement(field) && "radio" === field.type
        },
        isSelectElement = exports.isSelectElement = function(field) {
            return field.constructor === HTMLSelectElement
        },
        isTextareaElement = exports.isTextareaElement = function(field) {
            return field.constructor === HTMLTextAreaElement
        },
        isCheckableElement = exports.isCheckableElement = function(field) {
            return isInputElement(field) && (isCheckboxElement(field) || isRadioElement(field))
        },
        isFieldChecked = (exports.isFileInputElement = function(field) {
            return isInputElement(field) && "file" === field.type
        }, exports.isFieldChecked = function(field) {
            return isCheckboxElement(field) && isRadioElement(field) && !0 === field.checked
        }),
        isFieldUnchecked = exports.isFieldUnchecked = function(field) {
            return isCheckboxElement(field) && isRadioElement(field) && !1 === field.checked
        },
        isFieldSelected = exports.isFieldSelected = function(field) {
            return isSelectElement(field) && !0 === field.selected
        },
        isFieldUnselected = exports.isFieldUnselected = function(field) {
            return isSelectElement(field) && !1 === field.selected
        },
        capitalize = exports.capitalize = function(value) {
            return "" + value.charAt(0).toUpperCase() + value.slice(1)
        };
    exports.default = {
        CONSTANTS: {
            EMAIL_REGEXP: EMAIL_REGEXP
        },
        value_type: {
            isString: isString,
            isNumber: isNumber,
            isBoolean: isBoolean,
            isEmail: isEmail,
            isFunction: isFunction,
            isInt: isInt,
            isStr: isStr
        },
        field_type: {
            isInputElement: isInputElement,
            isTextInputElement: isTextInputElement,
            isNumberInputElement: isNumberInputElement,
            isEmailInputElement: isEmailInputElement,
            isDateInputElement: isDateInputElement,
            isCheckboxElement: isCheckboxElement,
            isRadioElement: isRadioElement,
            isSelectElement: isSelectElement,
            isTextareaElement: isTextareaElement,
            isCheckableElement: isCheckableElement
        },
        field_state: {
            isFieldChecked: isFieldChecked,
            isFieldUnchecked: isFieldUnchecked,
            isFieldSelected: isFieldSelected,
            isFieldUnselected: isFieldUnselected
        },
        tools: {
            capitalize: capitalize
        }
    }
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _helpers = __webpack_require__(0),
        BaseRule = function() {
            function BaseRule(rule, key) {
                var value = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : void 0,
                    constraints = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : [],
                    HTMLField = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : null;
                _classCallCheck(this, BaseRule), this.rule = rule, this.key = key, this.value = value, this.constraints = constraints, this.HTMLField = HTMLField
            }
            return _createClass(BaseRule, [{
                key: "_hasHTMLField",
                value: function() {
                    return this.HTMLField && this.HTMLField.length
                }
            }, {
                key: "_isset",
                value: function() {
                    return (0, _helpers.isset)(this.value)
                }
            }]), BaseRule
        }();
    exports.default = BaseRule
}, function(module, exports, __webpack_require__) {
    "use strict";
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _Formr = __webpack_require__(3),
        _Formr2 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_Formr);
    ! function(w) {
        void 0 !== w && (__webpack_require__(11), w.Formr || (w.Formr = _Formr2.default))
    }(window), exports.default = _Formr2.default
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : {
            default: obj
        }
    }

    function _toConsumableArray(arr) {
        if (Array.isArray(arr)) {
            for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) arr2[i] = arr[i];
            return arr2
        }
        return Array.from(arr)
    }

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _slicedToArray = function() {
            function sliceIterator(arr, i) {
                var _arr = [],
                    _n = !0,
                    _d = !1,
                    _e = void 0;
                try {
                    for (var _s, _i = arr[Symbol.iterator](); !(_n = (_s = _i.next()).done) && (_arr.push(_s.value), !i || _arr.length !== i); _n = !0);
                } catch (err) {
                    _d = !0, _e = err
                } finally {
                    try {
                        !_n && _i.return && _i.return()
                    } finally {
                        if (_d) throw _e
                    }
                }
                return _arr
            }
            return function(arr, i) {
                if (Array.isArray(arr)) return arr;
                if (Symbol.iterator in Object(arr)) return sliceIterator(arr, i);
                throw new TypeError("Invalid attempt to destructure non-iterable instance")
            }
        }(),
        _extends = Object.assign || function(target) {
            for (var i = 1; i < arguments.length; i++) {
                var source = arguments[i];
                for (var key in source) Object.prototype.hasOwnProperty.call(source, key) && (target[key] = source[key])
            }
            return target
        },
        _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _RequiredRule = __webpack_require__(4),
        _RequiredRule2 = _interopRequireDefault(_RequiredRule),
        _StringRule = __webpack_require__(5),
        _StringRule2 = _interopRequireDefault(_StringRule),
        _NumberRule = __webpack_require__(6),
        _NumberRule2 = _interopRequireDefault(_NumberRule),
        _BooleanRule = __webpack_require__(7),
        _BooleanRule2 = _interopRequireDefault(_BooleanRule),
        _EmailRule = __webpack_require__(8),
        _EmailRule2 = _interopRequireDefault(_EmailRule),
        _CheckedRule = __webpack_require__(9),
        _CheckedRule2 = _interopRequireDefault(_CheckedRule),
        _ImageRule = __webpack_require__(10),
        _ImageRule2 = _interopRequireDefault(_ImageRule),
        _helpers = __webpack_require__(0),
        DEFAULT_SETTINGS = {
            debug: !1,
            test_mode: !1,
            observe_event: "keyup",
            validate_before_submit: !0
        },
        Formr = function() {
            function Formr(data) {
                var settings = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                if (_classCallCheck(this, Formr), !data) throw new Error("Formr :: data is not defined");
                this._isHTMLFormElement = !1, this._data = data, this._excluded = [], this._settings = _extends({}, DEFAULT_SETTINGS, settings), this._errors = {}, this._rules = {}, this._observers = {}, this._validators = {
                    required: _RequiredRule2.default,
                    string: _StringRule2.default,
                    number: _NumberRule2.default,
                    boolean: _BooleanRule2.default,
                    email: _EmailRule2.default,
                    checked: _CheckedRule2.default,
                    image: _ImageRule2.default
                }, this._messages = {
                    required: "Este campo es obligatorio ",
                    string: "Este campo debe ser una cadena de caracteres válida",
                    boolean: "Este campo debe ser de tipo booleano (verdadero / falso)",
                    number: "Este campo solo puede contener números",
                    email: "El formato de la dirección de correo electrónico no es válido.",
                    length: "Este campo debe estar entre :min y :max caracteres",
                    between: "Este campo debe estar entre :min y :max",
                    under: "El valor de este campo debe ser:strict menor que :max",
                    above: "El valor de este campo debe ser:strict mayor que :min",
                    same: 'Valor: "valor" es diferente de lo esperado ":expected"',
                    in : 'Solo los valores ":values" están permitidos para este campo',
                    checked: "Este campo debe estar marcado",
                    unchecked: "Este campo no debe marcarse",
                    image: "Formato de archivo no válido (aceptado: :acceptedMimetypes)",
                    type: 'El archivo debe ser de tipo":mimetype"',
                    size: "El tamaño del archivo no debe exceder:size Mb"
                }, this._initData(), this._form = this._isHTMLFormElement ? data : null, this._settings.messages && this.messages(this._settings.message)
            }
            return _createClass(Formr, [{
                key: "isValid",
                value: function() {
                    return Boolean(0 === Object.keys(this._errors).length)
                }
            }, {
                key: "getErrors",
                value: function() {
                    return this._errors
                }
            }, {
                key: "resetErrors",
                value: function() {
                    this._errors = []
                }
            }, {
                key: "messages",
                value: function() {
                    var _messages = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    return this._messages = _extends({}, this._messages, _messages), this
                }
            }, {
                key: "excluded",
                value: function() {
                    return arguments && arguments.length && (this._excluded = this._excluded.concat(Array.from(arguments))), this
                }
            }, {
                key: "required",
                value: function() {
                    if (arguments && arguments.length)
                        if (arguments.length > 1)
                            for (var i = 0; i < arguments.length; i++) this.required(arguments[i]);
                        else {
                            var _arguments = Array.prototype.slice.call(arguments),
                                key = _arguments[0],
                                value = this._getValue(key);
                            this._addRule(key, "required"), this._validate("required", key, value) || this._addError(key, "required")
                        }
                    return this
                }
            }, {
                key: "string",
                value: function() {
                    return this._callMultipleArgsMethod("string", arguments), this
                }
            }, {
                key: "number",
                value: function() {
                    return this._callMultipleArgsMethod("number", arguments), this
                }
            }, {
                key: "boolean",
                value: function() {
                    return this._callMultipleArgsMethod("boolean", arguments), this
                }
            }, {
                key: "email",
                value: function() {
                    return this._callMultipleArgsMethod("email", arguments), this
                }
            }, {
                key: "checked",
                value: function(key) {
                    var expected = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1],
                        element = this._getHtmlElement(key);
                    return this._addRule(key, "checked", [expected]), this._validate("checked", key, !!element && Boolean(element.checked), [expected]) || this._addError(key, expected ? "checked" : "unchecked"), this
                }
            }, {
                key: "image",
                value: function(key) {
                    var acceptedMimetypes = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [];
                    if (this._isHTMLFormElement || !1 !== this._settings.test_mode) {
                        var value = this._getValue(key);
                        this._addRule(key, "image", [acceptedMimetypes]), this._validate("image", key, value, [acceptedMimetypes]) || this._addError(key, "image", {
                            acceptedMimetypes: acceptedMimetypes.join(",")
                        })
                    }
                    return this
                }
            }, {
                key: "type",
                value: function(key, mimetype) {
                    if (this._isHTMLFormElement || !1 !== this._settings.test_mode) {
                        var value = this._getValue(key);
                        this._addRule(key, "type", [mimetype]), value.type !== mimetype && this._addError(key, "type", {
                            mimetype: mimetype
                        })
                    }
                }
            }, {
                key: "size",
                value: function(key) {
                    var _size = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
                    if (this._isHTMLFormElement || !1 !== this._settings.test_mode) {
                        var value = this._getValue(key);
                        this._addRule(key, "size", [_size]), value.size < _size && this._addError(key, "size", {
                            size: _size
                        })
                    }
                    return this
                }
            }, {
                key: "in",
                value: function(key) {
                    var constraints = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [],
                        value = this._getValue(key);
                    return this._addRule(key, "in", [constraints]), Array.isArray(constraints, value) || this._addError(key, "in", {
                        ":values": constraints.join(",")
                    }), this
                }
            }, {
                key: "between",
                value: function(key) {
                    var min = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                        max = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                        value = this._getValue(key),
                        _isInt = (0, _helpers.isInt)(value);
                    return this._addRule(key, "between", [min, max]), ((0, _helpers.isStr)(value) && (value.length < min || value.length > max) || _isInt && (value < min || value > max)) && this._addError(key, _isInt ? "between" : "length", {
                        ":min": min,
                        ":max": max
                    }), this
                }
            }, {
                key: "under",
                value: function(key) {
                    var max = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                        strict = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                        value = Number(this._getValue(key));
                    return this._addRule(key, "under", [max, strict]), (0, _helpers.isNumber)(value) && (strict && value > max || !strict && value >= max) && this._addError(key, "under", {
                        ":max": max,
                        ":strict": strict ? "" : " strictement"
                    }), this
                }
            }, {
                key: "above",
                value: function(key) {
                    var min = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                        strict = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                        value = Number(this._getValue(key));
                    return this._addRule(key, "above", [min, strict]), (0, _helpers.isNumber)(value) && (strict && value < min || !strict && value <= min) && this._addError(key, "above", {
                        ":min": min,
                        ":strict": strict ? "" : " strictement"
                    }), this
                }
            }, {
                key: "same",
                value: function(key) {
                    var comparisonValue = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
                        strict = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                        value = Number(this._getValue(key));
                    return this._addRule(key, "same", [comparisonValue, strict]), (!strict && comparisonValue != value || strict && comparisonValue !== value) && this._addError(key, "same", {
                        ":expected": value,
                        ":value": comparisonValue
                    }), this
                }
            }, {
                key: "validateAll",
                value: function() {
                    return this._applyRules(!0), this
                }
            }, {
                key: "validate",
                value: function() {
                    return arguments.length ? (this.resetErrors(), Array.from(arguments).forEach(this._applyRule.bind(this))) : this.validateAll(), this
                }
            }, {
                key: "observe",
                value: function() {
                    var _this = this;
                    if (!arguments.length || (0, _helpers.isFunction)(arguments[0])) throw new Error("Formr.observe :: You must specify at least one field to observe");
                    if (this._isHTMLFormElement) {
                        var args = Array.from(arguments),
                            callback = args.pop();
                        if (!callback || callback.constructor !== Function) throw new Error("Formr.observe :: the last argument must be a valid JavaScript function");
                        args.forEach(function(arg) {
                            return _this._observable(arg, callback)
                        })
                    }
                    return this
                }
            }, {
                key: "unobserve",
                value: function() {
                    var _this2 = this;
                    return this._isHTMLFormElement && arguments.length && Array.from(arguments).forEach(function(key) {
                        _this2._data[key].removeEventListener(_this2._settings.observe_event, _this2._observers[key]), _this2._observers[key] = null
                    }), this
                }
            }, {
                key: "submit",
                value: function(callback) {
                    var _this3 = this,
                        preventDefault = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                    return this._isHTMLFormElement && this._form && this._form.addEventListener("submit", function(e) {
                        preventDefault && e.preventDefault(), !0 === _this3._settings.validate_before_submit && _this3.validateAll(), callback(e)
                    }), this
                }
            }, {
                key: "_observable",
                value: function(arg, callback) {
                    var _this4 = this,
                        cEvent = null,
                        cCallback = null,
                        validate = !1;
                    if (Array.isArray(arg)) {
                        var _arg = arg,
                            _arg2 = _slicedToArray(_arg, 4);
                        arg = _arg2[0], cEvent = _arg2[1], customCallback = _arg2[2], validate = _arg2[3]
                    } else arg.constructor === Object && (cEvent = arg.event || null, cCallback = arg.callback || null, validate = arg.validate, arg = arg.field);
                    this._observers[arg] = this._debounce(function(e) {
                        var value = e.target.value;
                        _this4._setValue(arg, value);
                        var err = null;
                        validate && (_this4._applyRules(!0), err = _this4.isValid() ? null : _this4.getErrors()), cCallback && cCallback.constructor === Function && cCallback(e, arg, value, err), callback(e, arg, value, err)
                    }, 300), this._data[arg].addEventListener(cEvent || this._settings.observe_event, this._observers[arg])
                }
            }, {
                key: "_getValue",
                value: function(key) {
                    var field = this._data[key];
                    if (!(0, _helpers.isset)(field)) throw new Error("Key '" + key + "' does not exists !");
                    return (0, _helpers.isFileInputElement)(field) ? field.files : (0, _helpers.isCheckableElement)(field) ? field.checked : (0, _helpers.isInputElement)(field) || (0, _helpers.isSelectElement)(field) || (0, _helpers.isTextareaElement)(field) ? field.value : void 0
                }
            }, {
                key: "_getHtmlElement",
                value: function(key) {
                    return this._isHTMLFormElement ? this._data[key] || null : null
                }
            }, {
                key: "_setValue",
                value: function(key, value) {
                    void 0 !== this._data[key] && (this._data[key].value = value)
                }
            }, {
                key: "_addError",
                value: function(key, type) {
                    var repl = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null,
                        message = this._messages[type];
                    message && (repl && (message = message.replace(new RegExp(Object.keys(repl).join("|"), "g"), function(s) {
                        return repl[s]
                    })), this._errors[key] || (this._errors[key] = []), this._errors[key].push(message))
                }
            }, {
                key: "_normalizeData",
                value: function() {
                    var arr = [];
                    if (Object.keys(this._data).length)
                        for (var field in this._data) arr.push({
                            name: field,
                            value: this._data[field]
                        });
                    this._data = arr
                }
            }, {
                key: "_initData",
                value: function() {
                    if (void 0 !== window && this._data.constructor === window.HTMLFormElement) this._isHTMLFormElement = !0, this._data = this._data.elements;
                    else {
                        if (this._data.constructor !== Object) throw new Error("Formr :: data must be a valid HTML form Element or a valid Javascript Object");
                        this._normalizeData()
                    }
                }
            }, {
                key: "_callMultipleArgsMethod",
                value: function(rule_name) {
                    var args = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [];
                    if (args && args.length)
                        if (args.length > 1)
                            for (var i = 0; i < args.length; i++) this[rule_name](args[i]);
                        else {
                            var _args = _slicedToArray(args, 1),
                                key = _args[0],
                                value = this._getValue(key);
                            this._addRule(key, rule_name), this._validate(rule_name, key, value) || this._addError(key, rule_name)
                        }
                    return this
                }
            }, {
                key: "_validate",
                value: function(rule, key, value) {
                    var constraints = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : [];
                    if (this._isOptional(key) && (!this._getValue(key) || !this._getValue(key).length)) return !0;
                    var ValidatorClass = this._validators[rule] || null;
                    if (!ValidatorClass) return !0;
                    try {
                        var v = new ValidatorClass(rule, key, value, constraints, this._getHtmlElement(key));
                        return v.validate.apply(v, constraints)
                    } catch (e) {
                        throw new Error(e)
                    }
                    return !0
                }
            }, {
                key: "_addRule",
                value: function(key, name) {
                    var constraints = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [];
                    this._rules[key] || (this._rules[key] = {}), this._rules[key][name] || (this._rules[key][name] = constraints)
                }
            }, {
                key: "_isRequired",
                value: function(key) {
                    return Object.keys(this._rules[key]).indexOf("required") >= 0
                }
            }, {
                key: "_isOptional",
                value: function(key) {
                    return !this._isRequired(key)
                }
            }, {
                key: "_applyRules",
                value: function() {
                    arguments.length > 0 && void 0 !== arguments[0] && arguments[0] && this.resetErrors();
                    for (var key in this._rules) this._applyRule(key)
                }
            }, {
                key: "_applyRule",
                value: function(key) {
                    if (this._rules[key]) {
                        var rules = this._rules[key];
                        if (rules && Object.keys(rules).length)
                            for (var name in rules) this[name].apply(this, [key].concat(_toConsumableArray(rules[name])))
                    }
                }
            }, {
                key: "_isFormElement",
                value: function(item) {
                    return !(!this._isHTMLFormElement || !item.constructor) && [HTMLInputElement, HTMLTextAreaElement, HTMLSelectElement].indexOf(item.constructor) >= 0
                }
            }, {
                key: "_debounce",
                value: function(callback, delay) {
                    var timer = void 0;
                    return function() {
                        var args = arguments,
                            context = this;
                        clearTimeout(timer), timer = setTimeout(function() {
                            callback.apply(context, args)
                        }, delay)
                    }
                }
            }]), Formr
        }();
    exports.default = Formr
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        RequiredRule = (__webpack_require__(0), function(_BaseRule) {
            function RequiredRule() {
                return _classCallCheck(this, RequiredRule), _possibleConstructorReturn(this, (RequiredRule.__proto__ || Object.getPrototypeOf(RequiredRule)).apply(this, arguments))
            }
            return _inherits(RequiredRule, _BaseRule), _createClass(RequiredRule, [{
                key: "validate",
                value: function() {
                    return !!this._isset() && Boolean(this.value.length > 0)
                }
            }]), RequiredRule
        }(_BaseRule3.default));
    exports.default = RequiredRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        _helpers = __webpack_require__(0),
        StringRule = function(_BaseRule) {
            function StringRule() {
                return _classCallCheck(this, StringRule), _possibleConstructorReturn(this, (StringRule.__proto__ || Object.getPrototypeOf(StringRule)).apply(this, arguments))
            }
            return _inherits(StringRule, _BaseRule), _createClass(StringRule, [{
                key: "validate",
                value: function() {
                    return !!this._isset() && (0, _helpers.isString)(this.value)
                }
            }]), StringRule
        }(_BaseRule3.default);
    exports.default = StringRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        _helpers = __webpack_require__(0),
        NumberRule = function(_BaseRule) {
            function NumberRule() {
                return _classCallCheck(this, NumberRule), _possibleConstructorReturn(this, (NumberRule.__proto__ || Object.getPrototypeOf(NumberRule)).apply(this, arguments))
            }
            return _inherits(NumberRule, _BaseRule), _createClass(NumberRule, [{
                key: "validate",
                value: function() {
                    return !!this._isset() && ((0, _helpers.isInt)(this.value) && (this.value = Number(this.value)), (0, _helpers.isNumber)(this.value))
                }
            }]), NumberRule
        }(_BaseRule3.default);
    exports.default = NumberRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        _helpers = __webpack_require__(0),
        BooleanRule = function(_BaseRule) {
            function BooleanRule() {
                return _classCallCheck(this, BooleanRule), _possibleConstructorReturn(this, (BooleanRule.__proto__ || Object.getPrototypeOf(BooleanRule)).apply(this, arguments))
            }
            return _inherits(BooleanRule, _BaseRule), _createClass(BooleanRule, [{
                key: "validate",
                value: function() {
                    return !!this._isset() && (0, _helpers.isBoolean)(this.value)
                }
            }]), BooleanRule
        }(_BaseRule3.default);
    exports.default = BooleanRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        _helpers = __webpack_require__(0),
        EmailRule = function(_BaseRule) {
            function EmailRule() {
                return _classCallCheck(this, EmailRule), _possibleConstructorReturn(this, (EmailRule.__proto__ || Object.getPrototypeOf(EmailRule)).apply(this, arguments))
            }
            return _inherits(EmailRule, _BaseRule), _createClass(EmailRule, [{
                key: "validate",
                value: function() {
                    return !!this._isset() && (0, _helpers.isEmail)(this.value)
                }
            }]), EmailRule
        }(_BaseRule3.default);
    exports.default = EmailRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        _helpers = __webpack_require__(0),
        CheckedRule = function(_BaseRule) {
            function CheckedRule() {
                return _classCallCheck(this, CheckedRule), _possibleConstructorReturn(this, (CheckedRule.__proto__ || Object.getPrototypeOf(CheckedRule)).apply(this, arguments))
            }
            return _inherits(CheckedRule, _BaseRule), _createClass(CheckedRule, [{
                key: "validate",
                value: function(expected) {
                    return !!this._isset() && (this._hasHTMLField() && (0, _helpers.isCheckboxElement)(this.HTMLField) ? this.HTMLField.checked === expected : this.value == expected)
                }
            }]), CheckedRule
        }(_BaseRule3.default);
    exports.default = CheckedRule
}, function(module, exports, __webpack_require__) {
    "use strict";

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    function _possibleConstructorReturn(self, call) {
        if (!self) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !call || "object" != typeof call && "function" != typeof call ? self : call
    }

    function _inherits(subClass, superClass) {
        if ("function" != typeof superClass && null !== superClass) throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
        subClass.prototype = Object.create(superClass && superClass.prototype, {
            constructor: {
                value: subClass,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), superClass && (Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass)
    }
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
            }
        }(),
        _BaseRule2 = __webpack_require__(1),
        _BaseRule3 = function(obj) {
            return obj && obj.__esModule ? obj : {
                default: obj
            }
        }(_BaseRule2),
        ImageRule = function(_BaseRule) {
            function ImageRule(rule, key, value, HTMLField) {
                _classCallCheck(this, ImageRule);
                var _this = _possibleConstructorReturn(this, (ImageRule.__proto__ || Object.getPrototypeOf(ImageRule)).call(this, rule, key, value, HTMLField));
                return _this.mimetypes = ["jpg", "jpeg", "png", "svg", "tiff", "bmp", "gif"], _this
            }
            return _inherits(ImageRule, _BaseRule), _createClass(ImageRule, [{
                key: "validate",
                value: function() {
                    var mimetypes = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : this.mimetypes;
                    if (!this._isset()) return !1;
                    var re = new RegExp(mimetypes.join("|"), "gi");
                    return Boolean(this.value.constructor === FileList && this.value.length && Array.from(this.value).some(function(item) {
                        return re.test(item.type)
                    }))
                }
            }]), ImageRule
        }(_BaseRule3.default);
    exports.default = ImageRule
}, function(module, exports, __webpack_require__) {
    "use strict";
    ! function() {
        if (Event.prototype.preventDefault || (Event.prototype.preventDefault = function() {
                this.returnValue = !1
            }), Event.prototype.stopPropagation || (Event.prototype.stopPropagation = function() {
                this.cancelBubble = !0
            }), !Element.prototype.addEventListener) {
            var eventListeners = [],
                addEventListener = function(type, listener) {
                    var self = this,
                        wrapper = function(e) {
                            e.target = e.srcElement, e.currentTarget = self, void 0 !== listener.handleEvent ? listener.handleEvent(e) : listener.call(self, e)
                        };
                    if ("DOMContentLoaded" == type) {
                        var wrapper2 = function(e) {
                            "complete" == document.readyState && wrapper(e)
                        };
                        if (document.attachEvent("onreadystatechange", wrapper2), eventListeners.push({
                                object: this,
                                type: type,
                                listener: listener,
                                wrapper: wrapper2
                            }), "complete" == document.readyState) {
                            var e = new Event;
                            e.srcElement = window, wrapper2(e)
                        }
                    } else this.attachEvent("on" + type, wrapper), eventListeners.push({
                        object: this,
                        type: type,
                        listener: listener,
                        wrapper: wrapper
                    })
                },
                removeEventListener = function(type, listener) {
                    for (var counter = 0; counter < eventListeners.length;) {
                        var eventListener = eventListeners[counter];
                        if (eventListener.object == this && eventListener.type == type && eventListener.listener == listener) {
                            "DOMContentLoaded" == type ? this.detachEvent("onreadystatechange", eventListener.wrapper) : this.detachEvent("on" + type, eventListener.wrapper), eventListeners.splice(counter, 1);
                            break
                        }++counter
                    }
                };
            Element.prototype.addEventListener = addEventListener, Element.prototype.removeEventListener = removeEventListener, HTMLDocument && (HTMLDocument.prototype.addEventListener = addEventListener, HTMLDocument.prototype.removeEventListener = removeEventListener), Window && (Window.prototype.addEventListener = addEventListener, Window.prototype.removeEventListener = removeEventListener)
        }
    }()
}]);