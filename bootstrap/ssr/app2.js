import _ from "lodash";
import axios from "axios";
import * as echarts from "echarts";
import "dom-to-image-more";
import html2canvas from "html2canvas";
import ApexCharts from "apexcharts";
import Chart from "chart.js/auto";
import ChartDataLabels from "chartjs-plugin-datalabels";
window._ = _;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const virtualSelect_min = "";
/*!
 * Virtual Select v1.0.42
 * https://sa-si-dev.github.io/virtual-select
 * Licensed under MIT (https://github.com/sa-si-dev/virtual-select/blob/master/LICENSE)
 */
!function() {
  function e(e2) {
    return function(e3) {
      if (Array.isArray(e3))
        return t(e3);
    }(e2) || function(e3) {
      if ("undefined" != typeof Symbol && null != e3[Symbol.iterator] || null != e3["@@iterator"])
        return Array.from(e3);
    }(e2) || function(e3, i2) {
      if (e3) {
        if ("string" == typeof e3)
          return t(e3, i2);
        var o2 = Object.prototype.toString.call(e3).slice(8, -1);
        return "Object" === o2 && e3.constructor && (o2 = e3.constructor.name), "Map" === o2 || "Set" === o2 ? Array.from(e3) : "Arguments" === o2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o2) ? t(e3, i2) : void 0;
      }
    }(e2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function t(e2, t2) {
    (null == t2 || t2 > e2.length) && (t2 = e2.length);
    for (var i2 = 0, o2 = new Array(t2); i2 < t2; i2++)
      o2[i2] = e2[i2];
    return o2;
  }
  function i(e2) {
    return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e3) {
      return typeof e3;
    } : function(e3) {
      return e3 && "function" == typeof Symbol && e3.constructor === Symbol && e3 !== Symbol.prototype ? "symbol" : typeof e3;
    })(e2);
  }
  function o(e2, t2) {
    for (var o2 = 0; o2 < t2.length; o2++) {
      var s2 = t2[o2];
      s2.enumerable = s2.enumerable || false, s2.configurable = true, "value" in s2 && (s2.writable = true), Object.defineProperty(e2, (n2 = s2.key, r2 = void 0, r2 = function(e3, t3) {
        if ("object" !== i(e3) || null === e3)
          return e3;
        var o3 = e3[Symbol.toPrimitive];
        if (void 0 !== o3) {
          var s3 = o3.call(e3, t3 || "default");
          if ("object" !== i(s3))
            return s3;
          throw new TypeError("@@toPrimitive must return a primitive value.");
        }
        return ("string" === t3 ? String : Number)(e3);
      }(n2, "string"), "symbol" === i(r2) ? r2 : String(r2)), s2);
    }
    var n2, r2;
  }
  var s = function() {
    function t2() {
      !function(e2, t3) {
        if (!(e2 instanceof t3))
          throw new TypeError("Cannot call a class as a function");
      }(this, t2);
    }
    var s2, n2, r2;
    return s2 = t2, r2 = [{ key: "getString", value: function(e2) {
      return e2 || 0 === e2 ? e2.toString() : "";
    } }, { key: "convertToBoolean", value: function(e2) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      return true === e2 || "true" === e2 || false !== e2 && "false" !== e2 && t3;
    } }, { key: "isEmpty", value: function(e2) {
      var t3 = false;
      return e2 ? Array.isArray(e2) ? 0 === e2.length && (t3 = true) : "object" === i(e2) && 0 === Object.keys(e2).length && (t3 = true) : t3 = true, t3;
    } }, { key: "isNotEmpty", value: function(e2) {
      return !this.isEmpty(e2);
    } }, { key: "removeItemFromArray", value: function(t3, i2) {
      var o2 = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
      if (!Array.isArray(t3) || !t3.length)
        return t3;
      var s3 = o2 ? e(t3) : t3, n3 = s3.indexOf(i2);
      return -1 !== n3 && s3.splice(n3, 1), s3;
    } }, { key: "removeArrayEmpty", value: function(e2) {
      return Array.isArray(e2) && e2.length ? e2.filter(function(e3) {
        return !!e3;
      }) : [];
    } }, { key: "getRandomInt", value: function(e2) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0, i2 = Math.ceil(t3), o2 = Math.floor(e2);
      return Math.floor(Math.random() * (o2 - i2 - 1)) + i2;
    } }, { key: "regexEscape", value: function(e2) {
      return e2.replace(/[-/\\^$*+?.()|[\]{}]/g, "\\$&");
    } }, { key: "normalizeString", value: function(e2) {
      return e2.normalize("NFD").replace(/[^\w]/g, "");
    } }, { key: "willTextOverflow", value: function(e2, t3) {
      var i2 = document.createElement("div");
      i2.style.position = "absolute", i2.style.visibility = "hidden", i2.style.whiteSpace = "nowrap", i2.style.fontSize = window.getComputedStyle(e2).fontSize, i2.style.fontFamily = window.getComputedStyle(e2).fontFamily, i2.textContent = t3, document.body.appendChild(i2);
      var o2 = i2.clientWidth;
      return document.body.removeChild(i2), o2 > e2.clientWidth;
    } }, { key: "replaceDoubleQuotesWithHTML", value: function(e2) {
      return e2.replace(/"/g, "&quot;");
    } }, { key: "containsHTML", value: function(e2) {
      return /<[a-z][\s\S]*>/i.test(e2);
    } }], (n2 = null) && o(s2.prototype, n2), r2 && o(s2, r2), Object.defineProperty(s2, "prototype", { writable: false }), t2;
  }();
  function n(e2) {
    return (n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e3) {
      return typeof e3;
    } : function(e3) {
      return e3 && "function" == typeof Symbol && e3.constructor === Symbol && e3 !== Symbol.prototype ? "symbol" : typeof e3;
    })(e2);
  }
  function r(e2, t2) {
    return function(e3) {
      if (Array.isArray(e3))
        return e3;
    }(e2) || function(e3, t3) {
      var i2 = null == e3 ? null : "undefined" != typeof Symbol && e3[Symbol.iterator] || e3["@@iterator"];
      if (null != i2) {
        var o2, s2, n2, r2, a2 = [], l2 = true, u2 = false;
        try {
          if (n2 = (i2 = i2.call(e3)).next, 0 === t3) {
            if (Object(i2) !== i2)
              return;
            l2 = false;
          } else
            for (; !(l2 = (o2 = n2.call(i2)).done) && (a2.push(o2.value), a2.length !== t3); l2 = true)
              ;
        } catch (e4) {
          u2 = true, s2 = e4;
        } finally {
          try {
            if (!l2 && null != i2.return && (r2 = i2.return(), Object(r2) !== r2))
              return;
          } finally {
            if (u2)
              throw s2;
          }
        }
        return a2;
      }
    }(e2, t2) || l(e2, t2) || function() {
      throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function a(e2) {
    return function(e3) {
      if (Array.isArray(e3))
        return u(e3);
    }(e2) || function(e3) {
      if ("undefined" != typeof Symbol && null != e3[Symbol.iterator] || null != e3["@@iterator"])
        return Array.from(e3);
    }(e2) || l(e2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function l(e2, t2) {
    if (e2) {
      if ("string" == typeof e2)
        return u(e2, t2);
      var i2 = Object.prototype.toString.call(e2).slice(8, -1);
      return "Object" === i2 && e2.constructor && (i2 = e2.constructor.name), "Map" === i2 || "Set" === i2 ? Array.from(e2) : "Arguments" === i2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i2) ? u(e2, t2) : void 0;
    }
  }
  function u(e2, t2) {
    (null == t2 || t2 > e2.length) && (t2 = e2.length);
    for (var i2 = 0, o2 = new Array(t2); i2 < t2; i2++)
      o2[i2] = e2[i2];
    return o2;
  }
  function c(e2, t2) {
    for (var i2 = 0; i2 < t2.length; i2++) {
      var o2 = t2[i2];
      o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, (s2 = o2.key, r2 = void 0, r2 = function(e3, t3) {
        if ("object" !== n(e3) || null === e3)
          return e3;
        var i3 = e3[Symbol.toPrimitive];
        if (void 0 !== i3) {
          var o3 = i3.call(e3, t3 || "default");
          if ("object" !== n(o3))
            return o3;
          throw new TypeError("@@toPrimitive must return a primitive value.");
        }
        return ("string" === t3 ? String : Number)(e3);
      }(s2, "string"), "symbol" === n(r2) ? r2 : String(r2)), o2);
    }
    var s2, r2;
  }
  var p = function() {
    function e2() {
      !function(e3, t3) {
        if (!(e3 instanceof t3))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
    }
    var t2, i2, o2;
    return t2 = e2, o2 = [{ key: "addClass", value: function(t3, i3) {
      if (t3) {
        var o3 = i3.split(" ");
        e2.getElements(t3).forEach(function(e3) {
          var t4;
          (t4 = e3.classList).add.apply(t4, a(o3));
        });
      }
    } }, { key: "removeClass", value: function(t3, i3) {
      if (t3) {
        var o3 = i3.split(" ");
        e2.getElements(t3).forEach(function(e3) {
          var t4;
          (t4 = e3.classList).remove.apply(t4, a(o3));
        });
      }
    } }, { key: "toggleClass", value: function(t3, i3, o3) {
      var s2;
      t3 && (void 0 !== o3 && (s2 = Boolean(o3)), e2.getElements(t3).forEach(function(e3) {
        e3.classList.toggle(i3, s2);
      }));
    } }, { key: "hasClass", value: function(e3, t3) {
      return !!e3 && e3.classList.contains(t3);
    } }, { key: "hasEllipsis", value: function(e3) {
      return !!e3 && e3.scrollWidth > e3.offsetWidth;
    } }, { key: "getData", value: function(e3, t3, i3) {
      if (e3) {
        var o3 = e3 ? e3.dataset[t3] : "";
        return "number" === i3 ? o3 = parseFloat(o3) || 0 : "true" === o3 ? o3 = true : "false" === o3 && (o3 = false), o3;
      }
    } }, { key: "setData", value: function(e3, t3, i3) {
      e3 && (e3.dataset[t3] = i3);
    } }, { key: "setAttr", value: function(e3, t3, i3) {
      e3 && e3.setAttribute(t3, i3);
    } }, { key: "setAttrFromEle", value: function(e3, t3, i3, o3) {
      var s2 = {};
      i3.forEach(function(t4) {
        s2[t4] = e3.getAttribute(t4);
      }), i3.forEach(function(e4) {
        var i4 = s2[e4];
        (i4 || -1 !== o3.indexOf(e4) && "" === i4) && t3.setAttribute(e4, i4);
      });
    } }, { key: "setStyle", value: function(e3, t3, i3) {
      e3 && (e3.style[t3] = i3);
    } }, { key: "setStyles", value: function(e3, t3) {
      e3 && t3 && Object.keys(t3).forEach(function(i3) {
        e3.style[i3] = t3[i3];
      });
    } }, { key: "setAria", value: function(e3, t3, i3) {
      var o3 = t3;
      "role" !== o3 && (o3 = "aria-".concat(o3)), e3.setAttribute(o3, i3);
    } }, { key: "getElements", value: function(e3) {
      return e3 ? void 0 === e3.forEach ? [e3] : e3 : [];
    } }, { key: "getElementsBySelector", value: function() {
      var e3, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "", i3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : void 0, o3 = void 0 !== i3 ? i3 : document;
      return "" !== t3 && (e3 = o3.querySelectorAll(t3)), void 0 !== e3 ? Array.from(e3) : [];
    } }, { key: "addEvent", value: function(t3, i3, o3) {
      t3 && s.removeArrayEmpty(i3.split(" ")).forEach(function(i4) {
        e2.getElements(t3).forEach(function(e3) {
          e3.addEventListener(i4, o3);
        });
      });
    } }, { key: "dispatchEvent", value: function(t3, i3) {
      var o3 = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
      if (t3) {
        var s2 = e2.getElements(t3);
        setTimeout(function() {
          s2.forEach(function(e3) {
            e3.dispatchEvent(new CustomEvent(i3, { bubbles: o3 }));
          });
        }, 0);
      }
    } }, { key: "getAttributesText", value: function(e3) {
      var t3 = "";
      return e3 ? (Object.entries(e3).forEach(function(e4) {
        var i3 = r(e4, 2), o3 = i3[0], s2 = i3[1];
        void 0 !== s2 && (t3 += " ".concat(o3, '="').concat(s2, '" '));
      }), t3) : t3;
    } }, { key: "convertPropToDataAttr", value: function(e3) {
      return e3 ? "data-".concat(e3).replace(/([A-Z])/g, "-$1").toLowerCase() : "";
    } }, { key: "changeTabIndex", value: function(t3, i3) {
      t3 ? e2.getElements(t3).forEach(function(e3) {
        e3.tabIndex = i3;
      }) : console.log(t3, "Invalid element provided.");
    } }, { key: "removeEvent", value: function(t3, i3, o3) {
      t3 && e2.getElements(t3).forEach(function(e3) {
        e3.removeEventListener(i3, o3);
      });
    } }], (i2 = null) && c(t2.prototype, i2), o2 && c(t2, o2), Object.defineProperty(t2, "prototype", { writable: false }), e2;
  }();
  function h(e2, t2) {
    var i2 = Object.keys(e2);
    if (Object.getOwnPropertySymbols) {
      var o2 = Object.getOwnPropertySymbols(e2);
      t2 && (o2 = o2.filter(function(t3) {
        return Object.getOwnPropertyDescriptor(e2, t3).enumerable;
      })), i2.push.apply(i2, o2);
    }
    return i2;
  }
  function d(e2) {
    for (var t2 = 1; t2 < arguments.length; t2++) {
      var i2 = null != arguments[t2] ? arguments[t2] : {};
      t2 % 2 ? h(Object(i2), true).forEach(function(t3) {
        v(e2, t3, i2[t3]);
      }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e2, Object.getOwnPropertyDescriptors(i2)) : h(Object(i2)).forEach(function(t3) {
        Object.defineProperty(e2, t3, Object.getOwnPropertyDescriptor(i2, t3));
      });
    }
    return e2;
  }
  function v(e2, t2, i2) {
    return (t2 = S(t2)) in e2 ? Object.defineProperty(e2, t2, { value: i2, enumerable: true, configurable: true, writable: true }) : e2[t2] = i2, e2;
  }
  function f(e2) {
    return (f = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e3) {
      return typeof e3;
    } : function(e3) {
      return e3 && "function" == typeof Symbol && e3.constructor === Symbol && e3 !== Symbol.prototype ? "symbol" : typeof e3;
    })(e2);
  }
  function y(e2, t2) {
    return function(e3) {
      if (Array.isArray(e3))
        return e3;
    }(e2) || function(e3, t3) {
      var i2 = null == e3 ? null : "undefined" != typeof Symbol && e3[Symbol.iterator] || e3["@@iterator"];
      if (null != i2) {
        var o2, s2, n2, r2, a2 = [], l2 = true, u2 = false;
        try {
          if (n2 = (i2 = i2.call(e3)).next, 0 === t3) {
            if (Object(i2) !== i2)
              return;
            l2 = false;
          } else
            for (; !(l2 = (o2 = n2.call(i2)).done) && (a2.push(o2.value), a2.length !== t3); l2 = true)
              ;
        } catch (e4) {
          u2 = true, s2 = e4;
        } finally {
          try {
            if (!l2 && null != i2.return && (r2 = i2.return(), Object(r2) !== r2))
              return;
          } finally {
            if (u2)
              throw s2;
          }
        }
        return a2;
      }
    }(e2, t2) || m(e2, t2) || function() {
      throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function b(e2) {
    return function(e3) {
      if (Array.isArray(e3))
        return g(e3);
    }(e2) || function(e3) {
      if ("undefined" != typeof Symbol && null != e3[Symbol.iterator] || null != e3["@@iterator"])
        return Array.from(e3);
    }(e2) || m(e2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function m(e2, t2) {
    if (e2) {
      if ("string" == typeof e2)
        return g(e2, t2);
      var i2 = Object.prototype.toString.call(e2).slice(8, -1);
      return "Object" === i2 && e2.constructor && (i2 = e2.constructor.name), "Map" === i2 || "Set" === i2 ? Array.from(e2) : "Arguments" === i2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i2) ? g(e2, t2) : void 0;
    }
  }
  function g(e2, t2) {
    (null == t2 || t2 > e2.length) && (t2 = e2.length);
    for (var i2 = 0, o2 = new Array(t2); i2 < t2; i2++)
      o2[i2] = e2[i2];
    return o2;
  }
  function O(e2, t2) {
    for (var i2 = 0; i2 < t2.length; i2++) {
      var o2 = t2[i2];
      o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, S(o2.key), o2);
    }
  }
  function S(e2) {
    var t2 = function(e3, t3) {
      if ("object" !== f(e3) || null === e3)
        return e3;
      var i2 = e3[Symbol.toPrimitive];
      if (void 0 !== i2) {
        var o2 = i2.call(e3, t3 || "default");
        if ("object" !== f(o2))
          return o2;
        throw new TypeError("@@toPrimitive must return a primitive value.");
      }
      return ("string" === t3 ? String : Number)(e3);
    }(e2, "string");
    return "symbol" === f(t2) ? t2 : String(t2);
  }
  var x, w = { 13: "onEnterPress", 38: "onUpArrowPress", 40: "onDownArrowPress", 46: "onBackspaceOrDeletePress", 8: "onBackspaceOrDeletePress" }, k = ["autofocus", "disabled", "multiple", "required"], E = ["autofocus", "class", "disabled", "id", "multiple", "name", "placeholder", "required"], C = ["additionalClasses", "aliasKey", "allOptionsSelectedText", "allowNewOption", "alwaysShowSelectedOptionsCount", "alwaysShowSelectedOptionsLabel", "ariaLabelledby", "ariaLabelText", "ariaLabelClearButtonText", "autoSelectFirstOption", "clearButtonText", "descriptionKey", "disableAllOptionsSelectedText", "disableOptionGroupCheckbox", "disableSelectAll", "disableValidation", "dropboxWidth", "dropboxWrapper", "emptyValue", "enableSecureText", "focusSelectedOptionOnOpen", "hasOptionDescription", "hideClearButton", "hideValueTooltipOnSelectAll", "keepAlwaysOpen", "labelKey", "markSearchResults", "maxValues", "maxWidth", "minValues", "moreText", "noOfDisplayValues", "noOptionsText", "noSearchResultsText", "optionHeight", "optionSelectedText", "optionsCount", "optionsSelectedText", "popupDropboxBreakpoint", "popupPosition", "position", "search", "searchByStartsWith", "searchDelay", "searchFormLabel", "searchGroup", "searchNormalize", "searchPlaceholderText", "selectAllOnlyVisible", "selectAllText", "setValueAsArray", "showDropboxAsPopup", "showOptionsOnlyOnSearch", "showSelectedOptionsFirst", "showValueAsTags", "silentInitialValueSet", "textDirection", "tooltipAlignment", "tooltipFontSize", "tooltipMaxWidth", "updatePositionThrottle", "useGroupValue", "valueKey", "zIndex"], $ = function() {
    function e2(t3) {
      !function(e3, t4) {
        if (!(e3 instanceof t4))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
      try {
        this.createSecureTextElements(), this.setProps(t3), this.setDisabledOptions(t3.disabledOptions), this.setOptions(t3.options), this.render();
      } catch (e3) {
        console.warn("Couldn't initiate Virtual Select"), console.error(e3);
      }
    }
    var t2, i2, o2;
    return t2 = e2, o2 = [{ key: "init", value: function(t3) {
      var i3 = t3.ele;
      if (i3) {
        var o3 = false;
        if ("string" == typeof i3) {
          var s2 = (i3 = document.querySelectorAll(i3)).length;
          if (0 === s2)
            return;
          1 === s2 && (o3 = true);
        }
        void 0 !== i3.length && void 0 !== i3.forEach || (i3 = [i3], o3 = true);
        var n2 = [];
        return i3.forEach(function(i4) {
          i4.virtualSelect ? n2.push(i4.virtualSelect) : (t3.ele = i4, "SELECT" === i4.tagName && e2.setPropsFromSelect(t3), n2.push(new e2(t3)));
        }), o3 ? n2[0] : n2;
      }
    } }, { key: "getAttrProps", value: function() {
      var e3 = p.convertPropToDataAttr, t3 = {};
      return E.forEach(function(e4) {
        t3[e4] = e4;
      }), C.forEach(function(i3) {
        t3[e3(i3)] = i3;
      }), t3;
    } }, { key: "setPropsFromSelect", value: function(e3) {
      var t3 = e3.ele, i3 = [], o3 = [], s2 = function e4(t4) {
        var s3 = [];
        return Array.from(t4.children).forEach(function(t5) {
          var n3 = t5.value, r2 = { value: n3 };
          "OPTGROUP" === t5.tagName ? (r2.label = t5.getAttribute("label"), r2.options = e4(t5)) : r2.label = t5.innerHTML, s3.push(r2), t5.disabled && i3.push(n3), t5.selected && o3.push(n3);
        }), s3;
      }(t3), n2 = document.createElement("div");
      p.setAttrFromEle(t3, n2, Object.keys(x), k), t3.parentNode.insertBefore(n2, t3), t3.remove(), e3.ele = n2, e3.options = s2, e3.disabledOptions = i3, e3.selectedValue = o3;
    } }, { key: "onFormReset", value: function(e3) {
      var t3 = e3.target.closest("form");
      t3 && t3.querySelectorAll(".vscomp-ele-wrapper").forEach(function(e4) {
        e4.parentElement.virtualSelect.reset(true);
      });
    } }, { key: "onFormSubmit", value: function(t3) {
      e2.validate(t3.target.closest("form")) || t3.preventDefault();
    } }, { key: "validate", value: function(e3) {
      if (!e3)
        return true;
      var t3 = false;
      return e3.querySelectorAll(".vscomp-ele-wrapper").forEach(function(e4) {
        var i3 = e4.parentElement.virtualSelect.validate();
        t3 || i3 || (t3 = true);
      }), !t3;
    } }, { key: "reset", value: function() {
      this.virtualSelect.reset();
    } }, { key: "setValueMethod", value: function() {
      var e3;
      (e3 = this.virtualSelect).setValueMethod.apply(e3, arguments);
    } }, { key: "setOptionsMethod", value: function() {
      var e3;
      (e3 = this.virtualSelect).setOptionsMethod.apply(e3, arguments);
    } }, { key: "setDisabledOptionsMethod", value: function() {
      var e3;
      (e3 = this.virtualSelect).setDisabledOptionsMethod.apply(e3, arguments);
    } }, { key: "setEnabledOptionsMethod", value: function() {
      var e3;
      (e3 = this.virtualSelect).setEnabledOptionsMethod.apply(e3, arguments);
    } }, { key: "toggleSelectAll", value: function(e3) {
      this.virtualSelect.toggleAllOptions(e3);
    } }, { key: "isAllSelected", value: function() {
      return this.virtualSelect.isAllSelected;
    } }, { key: "addOptionMethod", value: function(e3) {
      this.virtualSelect.addOption(e3, true);
    } }, { key: "getNewValueMethod", value: function() {
      return this.virtualSelect.getNewValue();
    } }, { key: "getDisplayValueMethod", value: function() {
      return this.virtualSelect.getDisplayValue();
    } }, { key: "getSelectedOptionsMethod", value: function(e3) {
      return this.virtualSelect.getSelectedOptions(e3);
    } }, { key: "getDisabledOptionsMethod", value: function() {
      return this.virtualSelect.getDisabledOptions();
    } }, { key: "openMethod", value: function() {
      return this.virtualSelect.openDropbox();
    } }, { key: "closeMethod", value: function() {
      return this.virtualSelect.closeDropbox();
    } }, { key: "focusMethod", value: function() {
      return this.virtualSelect.focus();
    } }, { key: "enableMethod", value: function() {
      return this.virtualSelect.enable();
    } }, { key: "disableMethod", value: function() {
      return this.virtualSelect.disable();
    } }, { key: "destroyMethod", value: function() {
      return this.virtualSelect.destroy();
    } }, { key: "validateMethod", value: function() {
      return this.virtualSelect.validate();
    } }, { key: "toggleRequiredMethod", value: function(e3) {
      return this.virtualSelect.toggleRequired(e3);
    } }, { key: "onResizeMethod", value: function() {
      document.querySelectorAll(".vscomp-ele-wrapper").forEach(function(e3) {
        e3.parentElement.virtualSelect.onResize();
      });
    } }], (i2 = [{ key: "render", value: function() {
      if (this.$ele) {
        var e3 = this.uniqueId, t3 = "vscomp-wrapper", i3 = this.showValueAsTags ? "" : this.getTooltipAttrText(this.placeholder, true, true), o3 = this.getTooltipAttrText(this.clearButtonText), s2 = this.ariaLabelledby ? 'aria-labelledby="'.concat(this.ariaLabelledby, '"') : "", n2 = this.ariaLabelText ? 'aria-label="'.concat(this.ariaLabelText, '"') : "", r2 = this.ariaLabelClearButtonText ? 'aria-label="'.concat(this.ariaLabelClearButtonText, '"') : "", a2 = false;
        this.additionalClasses && (t3 += " ".concat(this.additionalClasses)), this.multiple && (t3 += " multiple", this.disableSelectAll || (t3 += " has-select-all")), this.hideClearButton || (t3 += " has-clear-button"), this.keepAlwaysOpen ? (t3 += " keep-always-open", a2 = true) : t3 += " closed", this.showAsPopup && (t3 += " show-as-popup"), this.hasSearch && (t3 += " has-search-input"), this.showValueAsTags && (t3 += " show-value-as-tags"), this.textDirection && (t3 += " text-direction-".concat(this.textDirection)), this.popupPosition && (t3 += " popup-position-".concat(this.popupPosition.toLowerCase()));
        var l2 = '<div id="vscomp-ele-wrapper-'.concat(e3, '" class="vscomp-ele-wrapper ').concat(t3, '" tabindex="0"\n        role="combobox" aria-haspopup="listbox" aria-controls="vscomp-dropbox-container-').concat(e3, '"\n        aria-expanded="').concat(a2, '" ').concat(s2, " ").concat(n2, '>\n        <input type="hidden" name="').concat(this.name, '" class="vscomp-hidden-input">\n        <div class="vscomp-toggle-button">\n          <div class="vscomp-value" ').concat(i3, ">\n            ").concat(this.placeholder, '\n          </div>\n          <div class="vscomp-arrow"></div>\n          <div class="vscomp-clear-button toggle-button-child" ').concat(o3, ' tabindex="0" ').concat(r2, '>\n            <i class="vscomp-clear-icon"></i>\n          </div>\n        </div>\n\n        ').concat(this.renderDropbox({ wrapperClasses: t3 }), "\n      </div>");
        this.$ele.innerHTML = l2, this.$body = document.querySelector("body"), this.$wrapper = this.$ele.querySelector(".vscomp-wrapper"), this.hasDropboxWrapper ? (this.$allWrappers = [this.$wrapper, this.$dropboxWrapper], this.$dropboxContainer = this.$dropboxWrapper.querySelector(".vscomp-dropbox-container"), p.addClass(this.$dropboxContainer, "pop-comp-wrapper")) : (this.$allWrappers = [this.$wrapper], this.$dropboxContainer = this.$wrapper.querySelector(".vscomp-dropbox-container")), this.$toggleButton = this.$ele.querySelector(".vscomp-toggle-button"), this.$clearButton = this.$ele.querySelector(".vscomp-clear-button"), this.$valueText = this.$ele.querySelector(".vscomp-value"), this.$hiddenInput = this.$ele.querySelector(".vscomp-hidden-input"), this.$dropbox = this.$dropboxContainer.querySelector(".vscomp-dropbox"), this.$dropboxCloseButton = this.$dropboxContainer.querySelector(".vscomp-dropbox-close-button"), this.$dropboxContainerBottom = this.$dropboxContainer.querySelector(".vscomp-dropbox-container-bottom"), this.$dropboxContainerTop = this.$dropboxContainer.querySelector(".vscomp-dropbox-container-top"), this.$search = this.$dropboxContainer.querySelector(".vscomp-search-wrapper"), this.$optionsContainer = this.$dropboxContainer.querySelector(".vscomp-options-container"), this.$optionsList = this.$dropboxContainer.querySelector(".vscomp-options-list"), this.$options = this.$dropboxContainer.querySelector(".vscomp-options"), this.$noOptions = this.$dropboxContainer.querySelector(".vscomp-no-options"), this.$noSearchResults = this.$dropboxContainer.querySelector(".vscomp-no-search-results"), this.afterRenderWrapper();
      }
    } }, { key: "renderDropbox", value: function(e3) {
      var t3 = e3.wrapperClasses, i3 = "self" !== this.dropboxWrapper ? document.querySelector(this.dropboxWrapper) : null, o3 = '<div id="vscomp-dropbox-container-'.concat(this.uniqueId, '" role="listbox" class="vscomp-dropbox-container">\n        <div class="vscomp-dropbox-container-top" aria-hidden="true" tabindex="0">&nbsp;</div>\n        <div class="vscomp-dropbox">\n          <div class="vscomp-search-wrapper"></div>\n\n          <div class="vscomp-options-container">\n            <div class="vscomp-options-loader"></div>\n\n            <div class="vscomp-options-list">\n              <div class="vscomp-options"></div>\n            </div>\n          </div>\n\n          <div class="vscomp-options-bottom-freezer"></div>\n          <div class="vscomp-no-options">').concat(this.noOptionsText, '</div>\n          <div class="vscomp-no-search-results">').concat(this.noSearchResultsText, '</div>\n\n          <span class="vscomp-dropbox-close-button"><i class="vscomp-clear-icon"></i></span>\n        </div>\n        <div class="vscomp-dropbox-container-bottom" aria-hidden="true" tabindex="0">&nbsp;</div>\n      </div>');
      if (i3) {
        var s2 = document.createElement("div");
        return this.$dropboxWrapper = s2, this.hasDropboxWrapper = true, s2.innerHTML = o3, i3.appendChild(s2), p.addClass(s2, "vscomp-dropbox-wrapper ".concat(t3)), "";
      }
      return this.hasDropboxWrapper = false, o3;
    } }, { key: "renderOptions", value: function() {
      var e3, t3 = this, i3 = "", o3 = this.getVisibleOptions(), n2 = "", r2 = "", a2 = !(!this.markSearchResults || !this.searchValue), l2 = this.labelRenderer, u2 = this.disableOptionGroupCheckbox, c2 = this.uniqueId, p2 = this.searchGroup, h2 = "function" == typeof l2, d2 = s.convertToBoolean, v2 = "";
      if (a2 && (e3 = new RegExp("(".concat(s.regexEscape(this.searchValue), ")(?!([^<]+)?>)"), "gi")), this.multiple && (n2 = '<span class="checkbox-icon"></span>'), this.allowNewOption) {
        var f2 = this.getTooltipAttrText("New Option");
        r2 = '<span class="vscomp-new-option-icon" '.concat(f2, "></span>");
      }
      o3.forEach(function(o4) {
        var s2, f3 = o4.index, y2 = "vscomp-option", b2 = t3.getTooltipAttrText("", true, true), m2 = n2, g2 = "", O2 = "", S2 = "", x2 = "", w2 = "-1", k2 = d2(o4.isSelected), E2 = "";
        if (o4.classNames && (y2 += " ".concat(o4.classNames)), o4.isFocused && (w2 = "0", y2 += " focused"), o4.isDisabled && (y2 += " disabled", E2 = 'aria-disabled="true"'), o4.isGroupTitle && (v2 = o4.label, y2 += " group-title", u2 && (m2 = "")), k2 && (y2 += " selected"), o4.isGroupOption) {
          var C2 = "";
          y2 += " group-option", S2 = 'data-group-index="'.concat(o4.groupIndex, '"'), o4.customData ? (v2 = void 0 !== o4.customData.group_name ? "".concat(o4.customData.group_name, ", ") : "", C2 = void 0 !== o4.customData.description ? " ".concat(o4.customData.description, ",") : "", x2 = 'aria-label="'.concat(v2, " ").concat(o4.label, ", ").concat(C2, '"')) : x2 = 'aria-label="'.concat(v2, ", ").concat(o4.label, '"');
        }
        s2 = h2 ? l2(o4) : o4.label, o4.description && (O2 = '<div class="vscomp-option-description" '.concat(b2, ">").concat(o4.description, "</div>")), o4.isCurrentNew ? (y2 += " current-new", g2 += r2) : !a2 || o4.isGroupTitle && !p2 || (s2 = s2.replace(e3, "<mark>$1</mark>")), i3 += '<div role="option" aria-selected="'.concat(k2, '" id="vscomp-option-').concat(c2, "-").concat(f3, '"\n          class="').concat(y2, '" data-value="').concat(o4.value, '" data-index="').concat(f3, '" data-visible-index="').concat(o4.visibleIndex, '"\n          tabindex=').concat(w2, " ").concat(S2, " ").concat(E2, " ").concat(x2, "\n        >\n          ").concat(m2, '\n          <span class="vscomp-option-text" ').concat(b2, ">\n            ").concat(s2, "\n          </span>\n          ").concat(O2, "\n          ").concat(g2, "\n        </div>");
      }), v2 = "", this.$options.innerHTML = i3, this.$visibleOptions = this.$options.querySelectorAll(".vscomp-option"), this.afterRenderOptions();
    } }, { key: "renderSearch", value: function() {
      if (this.hasSearchContainer) {
        var e3 = "", t3 = "";
        this.multiple && !this.disableSelectAll && (e3 = '<span class="vscomp-toggle-all-button">\n          <span class="checkbox-icon vscomp-toggle-all-checkbox"></span>\n          <span class="vscomp-toggle-all-label">'.concat(this.selectAllText, "</span>\n        </span>")), this.hasSearch && (t3 = '<label for="vscomp-search-input-'.concat(this.uniqueId, '" class="vscomp-search-label"\n        id="vscomp-search-label-').concat(this.uniqueId, '"\n      >\n        ').concat(this.searchFormLabel, '\n      </label>\n      <input type="text" class="vscomp-search-input" placeholder="').concat(this.searchPlaceholderText, '"\n        id="vscomp-search-input-').concat(this.uniqueId, '">\n      <span class="vscomp-search-clear">&times;</span>'));
        var i3 = '<div class="vscomp-search-container">\n        '.concat(e3, "\n        ").concat(t3, "\n      </div>");
        this.$search.innerHTML = i3, this.$searchInput = this.$dropboxContainer.querySelector(".vscomp-search-input"), this.$searchClear = this.$dropboxContainer.querySelector(".vscomp-search-clear"), this.$toggleAllButton = this.$dropboxContainer.querySelector(".vscomp-toggle-all-button"), this.$toggleAllCheckbox = this.$dropboxContainer.querySelector(".vscomp-toggle-all-checkbox"), this.addEvent(this.$searchInput, "input", "onSearch"), this.addEvent(this.$searchClear, "click", "onSearchClear"), this.addEvent(this.$toggleAllButton, "click", "onToggleAllOptions"), this.addEvent(this.$dropboxContainerBottom, "focus", "onDropboxContainerTopOrBottomFocus"), this.addEvent(this.$dropboxContainerTop, "focus", "onDropboxContainerTopOrBottomFocus");
      }
    } }, { key: "addEvents", value: function() {
      this.addEvent(document, "click", "onDocumentClick"), this.addEvent(this.$allWrappers, "keydown", "onKeyDown"), this.addEvent(this.$toggleButton, "click", "onToggleButtonClick"), this.addEvent(this.$clearButton, "click keydown", "onClearButtonClick"), this.addEvent(this.$dropboxContainer, "click", "onDropboxContainerClick"), this.addEvent(this.$dropboxCloseButton, "click", "onDropboxCloseButtonClick"), this.addEvent(this.$optionsContainer, "scroll", "onOptionsScroll"), this.addEvent(this.$options, "click", "onOptionsClick"), this.addEvent(this.$options, "mouseover", "onOptionsMouseOver"), this.addEvent(this.$options, "touchmove", "onOptionsTouchMove"), this.addMutationObserver();
    } }, { key: "addEvent", value: function(e3, t3, i3) {
      var o3 = this;
      e3 && s.removeArrayEmpty(t3.split(" ")).forEach(function(t4) {
        var s2 = "".concat(i3, "-").concat(t4), n2 = o3.events[s2];
        n2 || (n2 = o3[i3].bind(o3), o3.events[s2] = n2), p.addEvent(e3, t4, n2);
      });
    } }, { key: "removeEvents", value: function() {
      this.removeEvent(document, "click", "onDocumentClick"), this.removeEvent(this.$allWrappers, "keydown", "onKeyDown"), this.removeEvent(this.$toggleButton, "click", "onToggleButtonClick"), this.removeEvent(this.$clearButton, "click keydown", "onClearButtonClick"), this.removeEvent(this.$dropboxContainer, "click", "onDropboxContainerClick"), this.removeEvent(this.$dropboxCloseButton, "click", "onDropboxCloseButtonClick"), this.removeEvent(this.$optionsContainer, "scroll", "onOptionsScroll"), this.removeEvent(this.$options, "click", "onOptionsClick"), this.removeEvent(this.$options, "mouseover", "onOptionsMouseOver"), this.removeEvent(this.$options, "touchmove", "onOptionsTouchMove"), this.removeMutationObserver();
    } }, { key: "removeEvent", value: function(e3, t3, i3) {
      var o3 = this;
      e3 && s.removeArrayEmpty(t3.split(" ")).forEach(function(t4) {
        var s2 = "".concat(i3, "-").concat(t4), n2 = o3.events[s2];
        n2 && p.removeEvent(e3, t4, n2);
      });
    } }, { key: "onDocumentClick", value: function(e3) {
      var t3 = e3.target.closest(".vscomp-wrapper");
      t3 !== this.$wrapper && t3 !== this.$dropboxWrapper && this.isOpened() && this.closeDropbox();
    } }, { key: "onKeyDown", value: function(e3) {
      var t3 = e3.which || e3.keyCode, i3 = w[t3];
      return document.activeElement === this.$searchInput && e3.shiftKey && 9 === t3 ? (e3.preventDefault(), void this.$dropboxContainerTop.focus()) : document.activeElement === this.$searchInput && 9 === t3 ? (e3.preventDefault(), void this.focusFirstVisibleOption()) : void (document.activeElement !== this.$wrapper || 27 !== t3 && "Escape" !== e3.key || !this.showAsPopup ? i3 && this[i3](e3) : this.closeDropbox());
    } }, { key: "onEnterPress", value: function(e3) {
      e3.preventDefault(), this.isOpened() ? this.selectFocusedOption() : false === this.$ele.disabled && this.openDropbox();
    } }, { key: "onDownArrowPress", value: function(e3) {
      e3.preventDefault(), this.isOpened() ? this.focusOption({ direction: "next" }) : this.openDropbox();
    } }, { key: "onUpArrowPress", value: function(e3) {
      e3.preventDefault(), this.isOpened() ? this.focusOption({ direction: "previous" }) : this.openDropbox();
    } }, { key: "onBackspaceOrDeletePress", value: function(e3) {
      e3.target === this.$wrapper && (e3.preventDefault(), this.selectedValues.length > 0 && this.reset());
    } }, { key: "onToggleButtonClick", value: function(e3) {
      var t3 = e3.target;
      t3.closest(".vscomp-value-tag-clear-button") ? this.removeValue(t3.closest(".vscomp-value-tag")) : t3.closest(".toggle-button-child") || this.toggleDropbox();
    } }, { key: "onClearButtonClick", value: function(e3) {
      "click" === e3.type ? this.reset() : "keydown" === e3.type && ("Enter" !== e3.code && "Space" !== e3.code || (e3.stopPropagation(), this.reset()));
    } }, { key: "onOptionsScroll", value: function() {
      this.setVisibleOptions();
    } }, { key: "onOptionsClick", value: function(e3) {
      var t3 = e3.target.closest(".vscomp-option");
      t3 && !p.hasClass(t3, "disabled") && (p.hasClass(t3, "group-title") ? this.onGroupTitleClick(t3) : this.selectOption(t3, { event: e3 }));
    } }, { key: "onGroupTitleClick", value: function(e3) {
      if (e3 && this.multiple && !this.disableOptionGroupCheckbox) {
        var t3 = !p.hasClass(e3, "selected");
        this.toggleGroupTitleCheckbox(e3, t3), this.toggleGroupOptions(e3, t3);
      }
    } }, { key: "onDropboxContainerClick", value: function(e3) {
      e3.target.closest(".vscomp-dropbox") || this.closeDropbox();
    } }, { key: "onDropboxCloseButtonClick", value: function() {
      this.closeDropbox();
    } }, { key: "onOptionsMouseOver", value: function(e3) {
      var t3 = e3.target.closest(".vscomp-option");
      t3 && this.isOpened() && (p.hasClass(t3, "disabled") || p.hasClass(t3, "group-title") ? this.removeOptionFocus() : this.focusOption({ $option: t3 }));
    } }, { key: "onOptionsTouchMove", value: function() {
      this.removeOptionFocus();
    } }, { key: "onSearch", value: function(e3) {
      e3.stopPropagation(), this.setSearchValue(e3.target.value, true);
    } }, { key: "onSearchClear", value: function() {
      this.setSearchValue(""), this.focusSearchInput();
    } }, { key: "onToggleAllOptions", value: function() {
      this.toggleAllOptions();
    } }, { key: "onDropboxContainerTopOrBottomFocus", value: function() {
      this.closeDropbox();
    } }, { key: "onResize", value: function() {
      this.setOptionsContainerHeight(true);
    } }, { key: "addMutationObserver", value: function() {
      var e3 = this;
      if (this.hasDropboxWrapper) {
        var t3 = this.$ele;
        this.mutationObserver = new MutationObserver(function(i3) {
          var o3 = false, s2 = false;
          i3.forEach(function(e4) {
            o3 || (o3 = b(e4.addedNodes).some(function(e5) {
              return !(e5 !== t3 && !e5.contains(t3));
            })), s2 || (s2 = b(e4.removedNodes).some(function(e5) {
              return !(e5 !== t3 && !e5.contains(t3));
            }));
          }), s2 && !o3 && e3.destroy();
        }), this.mutationObserver.observe(document.querySelector("body"), { childList: true, subtree: true });
      }
    } }, { key: "removeMutationObserver", value: function() {
      this.mutationObserver.disconnect();
    } }, { key: "beforeValueSet", value: function(e3) {
      this.toggleAllOptionsClass(!e3 && void 0);
    } }, { key: "beforeSelectNewValue", value: function() {
      var e3 = this, t3 = this.getNewOption(), i3 = t3.index;
      this.newValues.push(t3.value), this.setOptionProp(i3, "isCurrentNew", false), this.setOptionProp(i3, "isNew", true), setTimeout(function() {
        e3.setSearchValue(""), e3.focusSearchInput();
      }, 0);
    } }, { key: "afterRenderWrapper", value: function() {
      p.addClass(this.$ele, "vscomp-ele"), this.renderSearch(), this.setEleStyles(), this.setDropboxStyles(), this.setOptionsHeight(), this.setVisibleOptions(), this.setOptionsContainerHeight(), this.addEvents(), this.setEleProps(), this.keepAlwaysOpen || this.showAsPopup || this.initDropboxPopover(), this.initialSelectedValue ? this.setValueMethod(this.initialSelectedValue, this.silentInitialValueSet) : this.autoSelectFirstOption && this.visibleOptions.length && this.setValueMethod(this.visibleOptions[0].value, this.silentInitialValueSet), this.showOptionsOnlyOnSearch && this.setSearchValue("", false, true), this.initialDisabled && this.disable(), this.autofocus && this.focus();
    } }, { key: "afterRenderOptions", value: function() {
      var e3 = this.getVisibleOptions(), t3 = !this.options.length && !this.hasServerSearch, i3 = !t3 && !e3.length;
      if ((!this.allowNewOption || this.hasServerSearch || this.showOptionsOnlyOnSearch) && (p.toggleClass(this.$allWrappers, "has-no-search-results", i3), i3 ? (p.setAttr(this.$noSearchResults, "tabindex", "0"), p.setAttr(this.$noSearchResults, "aria-hidden", "false")) : (p.setAttr(this.$noSearchResults, "tabindex", "-1"), p.setAttr(this.$noSearchResults, "aria-hidden", "true"))), p.toggleClass(this.$allWrappers, "has-no-options", t3), t3 ? (p.setAttr(this.$noOptions, "tabindex", "0"), p.setAttr(this.$noOptions, "aria-hidden", "false")) : (p.setAttr(this.$noOptions, "tabindex", "-1"), p.setAttr(this.$noOptions, "aria-hidden", "true")), this.setOptionAttr(), this.setOptionsPosition(), this.setOptionsTooltip(), document.activeElement !== this.$searchInput) {
        var o3 = p.getElementsBySelector(".focused", this.$dropboxContainer)[0];
        void 0 !== o3 && o3.focus();
      }
    } }, { key: "afterSetOptionsContainerHeight", value: function(e3) {
      e3 && this.showAsPopup && this.setVisibleOptions();
    } }, { key: "afterSetSearchValue", value: function() {
      var e3 = this;
      this.hasServerSearch ? (clearInterval(this.serverSearchTimeout), this.serverSearchTimeout = setTimeout(function() {
        e3.serverSearch();
      }, this.searchDelay)) : this.setVisibleOptionsCount(), this.selectAllOnlyVisible && this.toggleAllOptionsClass(), this.focusOption({ focusFirst: true });
    } }, { key: "afterSetVisibleOptionsCount", value: function() {
      this.scrollToTop(), this.setOptionsHeight(), this.setVisibleOptions(), this.updatePosition();
    } }, { key: "afterValueSet", value: function() {
      this.scrollToTop(), this.setSearchValue(""), this.renderOptions();
    } }, { key: "afterSetOptions", value: function(e3) {
      e3 && this.setSelectedProp(), this.setOptionsHeight(), this.setVisibleOptions(), this.showOptionsOnlyOnSearch && this.setSearchValue("", false, true), e3 || this.reset();
    } }, { key: "setProps", value: function(e3) {
      var t3 = this.setDefaultProps(e3);
      this.setPropsFromElementAttr(t3);
      var i3 = s.convertToBoolean;
      this.$ele = t3.ele, this.dropboxWrapper = t3.dropboxWrapper, this.valueKey = t3.valueKey, this.labelKey = t3.labelKey, this.descriptionKey = t3.descriptionKey, this.aliasKey = t3.aliasKey, this.optionHeightText = t3.optionHeight, this.optionHeight = parseFloat(this.optionHeightText), this.multiple = i3(t3.multiple), this.hasSearch = i3(t3.search), this.searchByStartsWith = i3(t3.searchByStartsWith), this.searchGroup = i3(t3.searchGroup), this.hideClearButton = i3(t3.hideClearButton), this.autoSelectFirstOption = i3(t3.autoSelectFirstOption), this.hasOptionDescription = i3(t3.hasOptionDescription), this.silentInitialValueSet = i3(t3.silentInitialValueSet), this.allowNewOption = i3(t3.allowNewOption), this.markSearchResults = i3(t3.markSearchResults), this.showSelectedOptionsFirst = i3(t3.showSelectedOptionsFirst), this.disableSelectAll = i3(t3.disableSelectAll), this.keepAlwaysOpen = i3(t3.keepAlwaysOpen), this.showDropboxAsPopup = i3(t3.showDropboxAsPopup), this.hideValueTooltipOnSelectAll = i3(t3.hideValueTooltipOnSelectAll), this.showOptionsOnlyOnSearch = i3(t3.showOptionsOnlyOnSearch), this.selectAllOnlyVisible = i3(t3.selectAllOnlyVisible), this.alwaysShowSelectedOptionsCount = i3(t3.alwaysShowSelectedOptionsCount), this.alwaysShowSelectedOptionsLabel = i3(t3.alwaysShowSelectedOptionsLabel), this.disableAllOptionsSelectedText = i3(t3.disableAllOptionsSelectedText), this.showValueAsTags = i3(t3.showValueAsTags), this.disableOptionGroupCheckbox = i3(t3.disableOptionGroupCheckbox), this.enableSecureText = i3(t3.enableSecureText), this.setValueAsArray = i3(t3.setValueAsArray), this.disableValidation = i3(t3.disableValidation), this.initialDisabled = i3(t3.disabled), this.required = i3(t3.required), this.autofocus = i3(t3.autofocus), this.useGroupValue = i3(t3.useGroupValue), this.focusSelectedOptionOnOpen = i3(t3.focusSelectedOptionOnOpen), this.noOptionsText = t3.noOptionsText, this.noSearchResultsText = t3.noSearchResultsText, this.selectAllText = t3.selectAllText, this.searchNormalize = t3.searchNormalize, this.searchPlaceholderText = t3.searchPlaceholderText, this.searchFormLabel = t3.searchFormLabel, this.optionsSelectedText = t3.optionsSelectedText, this.optionSelectedText = t3.optionSelectedText, this.allOptionsSelectedText = t3.allOptionsSelectedText, this.clearButtonText = t3.clearButtonText, this.moreText = t3.moreText, this.placeholder = t3.placeholder, this.position = t3.position, this.textDirection = t3.textDirection, this.dropboxWidth = t3.dropboxWidth, this.tooltipFontSize = t3.tooltipFontSize, this.tooltipAlignment = t3.tooltipAlignment, this.tooltipMaxWidth = t3.tooltipMaxWidth, this.updatePositionThrottle = t3.updatePositionThrottle, this.noOfDisplayValues = parseInt(t3.noOfDisplayValues), this.zIndex = parseInt(t3.zIndex), this.maxValues = parseInt(t3.maxValues), this.minValues = parseInt(t3.minValues), this.name = this.secureText(t3.name), this.additionalClasses = t3.additionalClasses, this.popupDropboxBreakpoint = t3.popupDropboxBreakpoint, this.popupPosition = t3.popupPosition, this.onServerSearch = t3.onServerSearch, this.labelRenderer = t3.labelRenderer, this.initialSelectedValue = 0 === t3.selectedValue ? "0" : t3.selectedValue, this.emptyValue = t3.emptyValue, this.ariaLabelledby = t3.ariaLabelledby, this.ariaLabelText = t3.ariaLabelText, this.ariaLabelClearButtonText = t3.ariaLabelClearButtonText, this.maxWidth = t3.maxWidth, this.searchDelay = t3.searchDelay, this.selectedValues = [], this.selectedOptions = [], this.newValues = [], this.events = {}, this.tooltipEnterDelay = 200, this.searchValue = "", this.searchValueOriginal = "", this.isAllSelected = false, (void 0 === t3.search && this.multiple || this.allowNewOption || this.showOptionsOnlyOnSearch) && (this.hasSearch = true), this.hasServerSearch = "function" == typeof this.onServerSearch, (this.maxValues || this.hasServerSearch || this.showOptionsOnlyOnSearch) && (this.disableSelectAll = true, this.disableOptionGroupCheckbox = true), this.keepAlwaysOpen && (this.dropboxWrapper = "self"), this.showAsPopup = this.showDropboxAsPopup && !this.keepAlwaysOpen && window.innerWidth <= parseFloat(this.popupDropboxBreakpoint), this.hasSearchContainer = this.hasSearch || this.multiple && !this.disableSelectAll, this.optionsCount = this.getOptionsCount(t3.optionsCount), this.halfOptionsCount = Math.ceil(this.optionsCount / 2), this.optionsHeight = this.getOptionsHeight(), this.uniqueId = this.getUniqueId();
    } }, { key: "setDefaultProps", value: function(e3) {
      var t3 = { dropboxWrapper: "self", valueKey: "value", labelKey: "label", descriptionKey: "description", aliasKey: "alias", ariaLabelText: "Options list", ariaLabelClearButtonText: "Clear button", optionsCount: 5, noOfDisplayValues: 50, optionHeight: "40px", noOptionsText: "No options found", noSearchResultsText: "No results found", selectAllText: "Select All", searchNormalize: false, searchPlaceholderText: "Search...", searchFormLabel: "Search", clearButtonText: "Clear", moreText: "more...", optionsSelectedText: "options selected", optionSelectedText: "option selected", allOptionsSelectedText: "All", placeholder: "Select", position: "bottom left", zIndex: e3.keepAlwaysOpen ? 1 : 2, tooltipFontSize: "14px", tooltipAlignment: "center", tooltipMaxWidth: "300px", updatePositionThrottle: 100, name: "", additionalClasses: "", maxValues: 0, showDropboxAsPopup: true, popupDropboxBreakpoint: "576px", popupPosition: "center", hideValueTooltipOnSelectAll: true, emptyValue: "", searchDelay: 300, focusSelectedOptionOnOpen: true };
      return e3.hasOptionDescription && (t3.optionsCount = 4, t3.optionHeight = "50px"), Object.assign(t3, e3);
    } }, { key: "setPropsFromElementAttr", value: function(e3) {
      var t3 = e3.ele;
      Object.keys(x).forEach(function(i3) {
        var o3 = t3.getAttribute(i3);
        -1 === k.indexOf(i3) || "" !== o3 && "true" !== o3 || (o3 = true), o3 && (e3[x[i3]] = o3);
      });
    } }, { key: "setEleProps", value: function() {
      var t3 = this.$ele;
      t3.virtualSelect = this, t3.value = this.multiple ? [] : "", t3.name = this.name, t3.disabled = false, t3.required = this.required, t3.autofocus = this.autofocus, t3.multiple = this.multiple, t3.form = t3.closest("form"), t3.reset = e2.reset, t3.setValue = e2.setValueMethod, t3.setOptions = e2.setOptionsMethod, t3.setDisabledOptions = e2.setDisabledOptionsMethod, t3.setEnabledOptions = e2.setEnabledOptionsMethod, t3.toggleSelectAll = e2.toggleSelectAll, t3.isAllSelected = e2.isAllSelected, t3.addOption = e2.addOptionMethod, t3.getNewValue = e2.getNewValueMethod, t3.getDisplayValue = e2.getDisplayValueMethod, t3.getSelectedOptions = e2.getSelectedOptionsMethod, t3.getDisabledOptions = e2.getDisabledOptionsMethod, t3.open = e2.openMethod, t3.close = e2.closeMethod, t3.focus = e2.focusMethod, t3.enable = e2.enableMethod, t3.disable = e2.disableMethod, t3.destroy = e2.destroyMethod, t3.validate = e2.validateMethod, t3.toggleRequired = e2.toggleRequiredMethod, this.hasDropboxWrapper && (this.$dropboxWrapper.virtualSelect = this);
    } }, { key: "setValueMethod", value: function(e3, t3) {
      var i3 = {}, o3 = {}, s2 = [], n2 = this.multiple, r2 = e3;
      if (r2) {
        if (Array.isArray(r2) || (r2 = [r2]), n2) {
          var a2 = this.maxValues;
          a2 && r2.length > a2 && r2.splice(a2);
        } else
          r2.length > 1 && (r2 = [r2[0]]);
        r2 = r2.map(function(e4) {
          return e4 || 0 === e4 ? e4.toString() : "";
        }), this.useGroupValue && (r2 = this.setGroupOptionsValue(r2)), r2.forEach(function(e4, t4) {
          i3[e4] = true, o3[e4] = t4;
        }), this.allowNewOption && r2 && this.setNewOptionsFromValue(r2);
      }
      if (this.options.forEach(function(e4) {
        true !== i3[e4.value] || e4.isDisabled || e4.isGroupTitle ? e4.isSelected = false : (e4.isSelected = true, s2.push(e4.value));
      }), n2)
        this.hasOptionGroup && this.setGroupsSelectedProp(), s2.sort(function(e4, t4) {
          return o3[e4] - o3[t4];
        });
      else {
        var l2 = y(s2, 1);
        s2 = l2[0];
      }
      this.beforeValueSet(), this.setValue(s2, { disableEvent: t3 }), this.afterValueSet();
    } }, { key: "setGroupOptionsValue", value: function(e3) {
      var t3 = [], i3 = {}, o3 = {};
      return e3.forEach(function(e4) {
        o3[e4] = true;
      }), this.options.forEach(function(e4) {
        var s2 = e4.value, n2 = true === o3[s2];
        e4.isGroupTitle ? n2 && (i3[e4.index] = true) : (n2 || i3[e4.groupIndex]) && t3.push(s2);
      }), t3;
    } }, { key: "setGroupsSelectedProp", value: function() {
      var e3 = this.isAllGroupOptionsSelected.bind(this);
      this.options.forEach(function(t3) {
        t3.isGroupTitle && (t3.isSelected = e3(t3.index));
      });
    } }, { key: "setOptionsMethod", value: function(e3, t3) {
      this.setOptions(e3), this.afterSetOptions(t3);
    } }, { key: "setDisabledOptionsMethod", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      this.setDisabledOptions(e3, true), t3 || (this.setValueMethod(null), this.toggleAllOptionsClass()), this.setVisibleOptions();
    } }, { key: "setDisabledOptions", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], i3 = [];
      if (e3)
        if (true === e3)
          t3 && this.options.forEach(function(e4) {
            return e4.isDisabled = true, i3.push(e4.value), e4;
          });
        else {
          i3 = e3.map(function(e4) {
            return e4.toString();
          });
          var o3 = {};
          i3.forEach(function(e4) {
            o3[e4] = true;
          }), t3 && this.options.forEach(function(e4) {
            return e4.isDisabled = true === o3[e4.value], e4;
          });
        }
      else
        t3 && this.options.forEach(function(e4) {
          return e4.isDisabled = false, e4;
        });
      this.disabledOptions = i3;
    } }, { key: "setEnabledOptionsMethod", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      this.setEnabledOptions(e3), t3 || (this.setValueMethod(null), this.toggleAllOptionsClass()), this.setVisibleOptions();
    } }, { key: "setEnabledOptions", value: function(e3) {
      if (void 0 !== e3) {
        var t3 = [];
        if (true === e3)
          this.options.forEach(function(e4) {
            return e4.isDisabled = false, e4;
          });
        else {
          var i3 = {};
          e3.forEach(function(e4) {
            i3[e4] = true;
          }), this.options.forEach(function(e4) {
            var o3 = true !== i3[e4.value];
            return e4.isDisabled = o3, o3 && t3.push(e4.value), e4;
          });
        }
        this.disabledOptions = t3;
      }
    } }, { key: "setOptions", value: function() {
      var e3 = this, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [], i3 = [], o3 = this.disabledOptions.length, n2 = this.valueKey, r2 = this.labelKey, a2 = this.descriptionKey, l2 = this.aliasKey, u2 = this.hasOptionDescription, c2 = s.getString, p2 = s.convertToBoolean, h2 = this.secureText.bind(this), d2 = this.getAlias.bind(this), y2 = 0, b2 = false, m2 = {}, g2 = false;
      this.disabledOptions.forEach(function(e4) {
        m2[e4] = true;
      });
      var O2 = function t4(O3) {
        var S3;
        "object" !== f(O3) && (v(S3 = {}, n2, O3), v(S3, r2, O3), O3 = S3);
        var x3 = h2(c2(O3[n2])), w2 = h2(c2(O3[r2])), k2 = O3.options, E2 = !!k2, C2 = { index: y2, value: x3, label: w2, labelNormalized: e3.searchNormalize ? s.normalizeString(w2).toLowerCase() : w2.toLowerCase(), alias: d2(O3[l2]), isVisible: p2(O3.isVisible, true), isNew: O3.isNew || false, isGroupTitle: E2, classNames: O3.classNames };
        if (g2 || "" !== x3 || (g2 = true), o3 && (C2.isDisabled = true === m2[x3]), O3.isGroupOption && (C2.isGroupOption = true, C2.groupIndex = O3.groupIndex), u2 && (C2.description = h2(c2(O3[a2]))), O3.customData && (C2.customData = O3.customData), i3.push(C2), y2 += 1, E2) {
          var $2 = C2.index;
          b2 = true, k2.forEach(function(e4) {
            e4.isGroupOption = true, e4.groupIndex = $2, t4(e4);
          });
        }
      };
      Array.isArray(t3) && t3.forEach(O2);
      var S2 = i3.length, x2 = this.$ele;
      x2.options = i3, x2.length = S2, this.options = i3, this.visibleOptionsCount = S2, this.lastOptionIndex = S2 - 1, this.newValues = [], this.hasOptionGroup = b2, this.hasEmptyValueOption = g2, this.setSortedOptions();
    } }, { key: "setServerOptions", value: function() {
      var e3 = this, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [];
      this.setOptionsMethod(t3, true);
      var i3 = this.selectedOptions, o3 = this.options, s2 = false;
      if (i3.length) {
        var n2 = {};
        s2 = true, o3.forEach(function(e4) {
          n2[e4.value] = true;
        }), i3.forEach(function(e4) {
          true !== n2[e4.value] && (e4.isVisible = false, o3.push(e4));
        }), this.setOptionsMethod(o3, true);
      }
      if (this.allowNewOption && this.searchValue) {
        var r2 = o3.some(function(t4) {
          return t4.label.toLowerCase() === e3.searchValue;
        });
        r2 || (s2 = true, this.setNewOption());
      }
      s2 ? (this.setVisibleOptionsCount(), this.multiple && this.toggleAllOptionsClass(), this.setValueText()) : this.updatePosition(), p.removeClass(this.$allWrappers, "server-searching");
    } }, { key: "setSelectedOptions", value: function() {
      this.selectedOptions = this.options.filter(function(e3) {
        return e3.isSelected;
      });
    } }, { key: "setSortedOptions", value: function() {
      var e3 = b(this.options);
      this.showSelectedOptionsFirst && this.selectedValues.length && (e3 = this.hasOptionGroup ? this.sortOptionsGroup(e3) : this.sortOptions(e3)), this.sortedOptions = e3;
    } }, { key: "setVisibleOptions", value: function() {
      var e3 = b(this.sortedOptions), t3 = 2 * this.optionsCount, i3 = this.getVisibleStartIndex(), o3 = this.getNewOption(), s2 = i3 + t3 - 1, n2 = 0;
      o3 && (o3.visibleIndex = n2, n2 += 1), e3 = e3.filter(function(e4) {
        var t4 = false;
        return e4.isVisible && !e4.isCurrentNew && (t4 = n2 >= i3 && n2 <= s2, e4.visibleIndex = n2, n2 += 1), t4;
      }), o3 && (e3 = [o3].concat(b(e3))), this.visibleOptions = e3, this.renderOptions();
    } }, { key: "setOptionsPosition", value: function(e3) {
      var t3 = (e3 || this.getVisibleStartIndex()) * this.optionHeight;
      this.$options.style.transform = "translate3d(0, ".concat(t3, "px, 0)"), p.setData(this.$options, "top", t3);
    } }, { key: "setOptionsTooltip", value: function() {
      var e3 = this, t3 = this.getVisibleOptions(), i3 = this.hasOptionDescription;
      t3.forEach(function(t4) {
        var o3 = e3.$dropboxContainer.querySelector('.vscomp-option[data-index="'.concat(t4.index, '"]'));
        p.setData(o3.querySelector(".vscomp-option-text"), "tooltip", t4.label), i3 && p.setData(o3.querySelector(".vscomp-option-description"), "tooltip", t4.description);
      });
    } }, { key: "setValue", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, i3 = t3.disableEvent, o3 = void 0 !== i3 && i3, n2 = t3.disableValidation, r2 = void 0 !== n2 && n2, a2 = this.hasEmptyValueOption && "" === e3 || e3;
      a2 ? Array.isArray(e3) ? this.selectedValues = b(e3) : this.selectedValues = [e3] : this.selectedValues = [];
      var l2 = this.getValue();
      this.$ele.value = l2, this.$hiddenInput.value = this.getInputValue(l2), this.isMaxValuesSelected = !!(this.maxValues && this.maxValues <= this.selectedValues.length), this.toggleAllOptionsClass(), this.setValueText(), p.toggleClass(this.$allWrappers, "has-value", s.isNotEmpty(this.selectedValues)), p.toggleClass(this.$allWrappers, "max-value-selected", this.isMaxValuesSelected), r2 || this.validate(), o3 || p.dispatchEvent(this.$ele, "change", true);
    } }, { key: "setValueText", value: function() {
      var e3 = this, t3 = this.multiple, i3 = this.selectedValues, o3 = this.noOfDisplayValues, n2 = this.showValueAsTags, r2 = this.$valueText, a2 = [], l2 = [], u2 = i3.length, c2 = 0, h2 = this.isAllSelected && !this.hasServerSearch && !this.disableAllOptionsSelectedText && !n2;
      if (h2 && this.hideValueTooltipOnSelectAll)
        r2.innerHTML = "".concat(this.allOptionsSelectedText, " (").concat(u2, ")");
      else {
        this.getSelectedOptions({ fullDetails: true, keepSelectionOrder: true }).some(function(t4) {
          if (t4.isCurrentNew)
            return false;
          if (c2 >= o3)
            return true;
          var i4 = t4.label;
          if (a2.push(i4), c2 += 1, n2) {
            var u3 = s.willTextOverflow(r2.parentElement, i4) ? e3.getTooltipAttrText(i4, false, true) : "", p2 = '<span class="vscomp-value-tag" data-index="'.concat(t4.index, '" ').concat(u3, '>\n                  <span class="vscomp-value-tag-content">').concat(i4, '</span>\n                  <span class="vscomp-value-tag-clear-button">\n                    <i class="vscomp-clear-icon"></i>\n                  </span>\n                </span>');
            l2.push(p2);
          } else
            l2.push(i4);
          return false;
        });
        var d2 = u2 - o3;
        d2 > 0 && l2.push('<span class="vscomp-value-tag more-value-count">+ '.concat(d2, " ").concat(this.moreText, "</span>"));
        var v2 = a2.join(", ");
        if ("" === v2)
          r2.innerHTML = this.placeholder;
        else if (r2.innerHTML = v2, t3) {
          var f2 = this.maxValues;
          if (this.alwaysShowSelectedOptionsCount || p.hasEllipsis(r2) || f2 || n2) {
            var y2 = '<span class="vscomp-selected-value-count">'.concat(u2, "</span>");
            if (f2 && (y2 += ' / <span class="vscomp-max-value-count">'.concat(f2, "</span>")), h2)
              r2.innerHTML = "".concat(this.allOptionsSelectedText, " (").concat(u2, ")");
            else if (n2)
              r2.innerHTML = l2.join(""), this.$valueTags = r2.querySelectorAll(".vscomp-value-tag"), this.setValueTagAttr();
            else if (!this.alwaysShowSelectedOptionsLabel) {
              var b2 = 1 === u2 ? this.optionSelectedText : this.optionsSelectedText;
              r2.innerHTML = "".concat(y2, " ").concat(b2);
            }
          } else
            l2 = [];
        }
      }
      var m2 = "";
      0 === u2 ? m2 = this.placeholder : n2 || (m2 = l2.join(", ")), n2 || p.setData(r2, "tooltip", m2), t3 && (n2 ? this.updatePosition() : p.setData(r2, "tooltipEllipsisOnly", 0 === u2));
    } }, { key: "setSearchValue", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], i3 = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
      if (e3 !== this.searchValueOriginal || i3) {
        t3 || (this.$searchInput.value = e3);
        var o3 = e3.replace(/\\/g, "").toLowerCase().trim();
        this.searchValue = o3, this.searchValueOriginal = e3, p.toggleClass(this.$allWrappers, "has-search-value", e3), this.afterSetSearchValue();
      }
    } }, { key: "setVisibleOptionsCount", value: function() {
      var e3, t3 = 0, i3 = false, o3 = this.searchGroup, n2 = this.showOptionsOnlyOnSearch, r2 = this.searchByStartsWith, a2 = this.searchValue;
      a2 = this.searchNormalize ? s.normalizeString(a2) : a2;
      var l2 = this.isOptionVisible.bind(this);
      this.hasOptionGroup && (e3 = this.getVisibleOptionGroupsMapping(a2)), this.options.forEach(function(s2) {
        var u2;
        s2.isCurrentNew || (n2 && !a2 ? (s2.isVisible = false, u2 = { isVisible: false, hasExactOption: false }) : u2 = l2({ data: s2, searchValue: a2, hasExactOption: i3, visibleOptionGroupsMapping: e3, searchGroup: o3, searchByStartsWith: r2 }), u2.isVisible && (t3 += 1), i3 || (i3 = u2.hasExactOption));
      }), this.allowNewOption && (a2 && !i3 ? (this.setNewOption(), t3 += 1) : this.removeNewOption()), this.visibleOptionsCount = t3, this.afterSetVisibleOptionsCount();
    } }, { key: "setOptionProp", value: function(e3, t3, i3) {
      this.options[e3] && (this.options[e3][t3] = i3);
    } }, { key: "setOptionsHeight", value: function() {
      this.$optionsList.style.height = "".concat(this.optionHeight * this.visibleOptionsCount, "px");
    } }, { key: "setOptionsContainerHeight", value: function(e3) {
      var t3;
      e3 ? this.showAsPopup && (this.optionsCount = this.getOptionsCount(), this.halfOptionsCount = Math.ceil(this.optionsCount / 2), t3 = this.getOptionsHeight(), this.optionsHeight = t3) : (t3 = this.optionsHeight, this.keepAlwaysOpen && (p.setStyle(this.$noOptions, "height", t3), p.setStyle(this.$noSearchResults, "height", t3))), p.setStyle(this.$optionsContainer, "max-height", t3), this.afterSetOptionsContainerHeight(e3);
    } }, { key: "setNewOption", value: function(e3) {
      var t3 = e3 || this.searchValueOriginal.trim();
      if (t3) {
        var i3 = this.getNewOption();
        if (i3) {
          var o3 = i3.index;
          this.setOptionProp(o3, "value", this.secureText(t3)), this.setOptionProp(o3, "label", this.secureText(t3));
        } else {
          var s2 = { value: t3, label: t3 };
          e3 ? (s2.isNew = true, this.newValues.push(t3)) : s2.isCurrentNew = true, this.addOption(s2);
        }
      }
    } }, { key: "setSelectedProp", value: function() {
      var e3 = {};
      this.selectedValues.forEach(function(t3) {
        e3[t3] = true;
      }), this.options.forEach(function(t3) {
        true === e3[t3.value] && (t3.isSelected = true);
      });
    } }, { key: "setNewOptionsFromValue", value: function(e3) {
      if (e3) {
        var t3 = this.setNewOption.bind(this), i3 = {};
        this.options.forEach(function(e4) {
          i3[e4.value] = true;
        }), e3.forEach(function(e4) {
          e4 && true !== i3[e4] && t3(e4);
        });
      }
    } }, { key: "setDropboxWrapperWidth", value: function() {
      if (!this.showAsPopup) {
        var e3 = this.dropboxWidth || "".concat(this.$wrapper.offsetWidth, "px");
        p.setStyle(this.$dropboxContainer, "max-width", e3);
      }
    } }, { key: "setEleStyles", value: function() {
      var e3 = this.maxWidth, t3 = {};
      e3 && (t3["max-width"] = e3), p.setStyles(this.$ele, t3);
    } }, { key: "setDropboxStyles", value: function() {
      var e3 = this.dropboxWidth, t3 = {}, i3 = { "z-index": this.zIndex };
      e3 && (this.showAsPopup ? t3["max-width"] = e3 : i3.width = e3), p.setStyles(this.$dropboxContainer, i3), p.setStyles(this.$dropbox, t3);
    } }, { key: "setOptionAttr", value: function() {
      var e3 = this.$visibleOptions, t3 = this.options, i3 = "".concat(this.optionHeight, "px"), o3 = p.setStyle, s2 = p.getData, n2 = p.setData;
      e3 && e3.length && e3.forEach(function(e4) {
        var r2 = t3[s2(e4, "index")];
        o3(e4, "height", i3), n2(e4, "value", r2.value);
      });
    } }, { key: "setValueTagAttr", value: function() {
      var e3 = this.$valueTags;
      if (e3 && e3.length) {
        var t3 = p.getData, i3 = p.setData, o3 = this.options;
        e3.forEach(function(e4) {
          var s2 = t3(e4, "index");
          if (void 0 !== s2) {
            var n2 = o3[s2];
            i3(e4, "value", n2.value);
          }
        });
      }
    } }, { key: "setScrollTop", value: function() {
      var e3 = this.selectedValues;
      if (!this.showSelectedOptionsFirst && this.focusSelectedOptionOnOpen && 0 !== e3.length) {
        var t3, i3 = {};
        e3.forEach(function(e4) {
          i3[e4] = true;
        }), this.options.some(function(e4) {
          return !!i3[e4.value] && (t3 = e4.visibleIndex, true);
        }), t3 && (this.$optionsContainer.scrollTop = this.optionHeight * t3);
      }
    } }, { key: "getVisibleOptions", value: function() {
      return this.visibleOptions || [];
    } }, { key: "getValue", value: function() {
      return this.multiple ? this.useGroupValue ? this.getGroupValue() : this.selectedValues : this.selectedValues[0] || "";
    } }, { key: "getGroupValue", value: function() {
      var e3 = [], t3 = {};
      return this.options.forEach(function(i3) {
        if (i3.isSelected) {
          var o3 = i3.value;
          i3.isGroupTitle ? o3 && (t3[i3.index] = true, e3.push(o3)) : true !== t3[i3.groupIndex] && e3.push(o3);
        }
      }), e3;
    } }, { key: "getInputValue", value: function(e3) {
      var t3 = e3;
      return t3 && t3.length ? this.setValueAsArray && this.multiple && (t3 = JSON.stringify(t3)) : t3 = this.emptyValue, t3;
    } }, { key: "getFirstVisibleOptionIndex", value: function() {
      return Math.ceil(this.$optionsContainer.scrollTop / this.optionHeight);
    } }, { key: "getVisibleStartIndex", value: function() {
      var e3 = this.getFirstVisibleOptionIndex() - this.halfOptionsCount;
      return e3 < 0 && (e3 = 0), e3;
    } }, { key: "getTooltipAttrText", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], i3 = arguments.length > 2 && void 0 !== arguments[2] && arguments[2], o3 = s.containsHTML(e3) ? s.replaceDoubleQuotesWithHTML(e3) : e3, n2 = { "data-tooltip": o3 || "", "data-tooltip-enter-delay": this.tooltipEnterDelay, "data-tooltip-z-index": this.zIndex, "data-tooltip-font-size": this.tooltipFontSize, "data-tooltip-alignment": this.tooltipAlignment, "data-tooltip-max-width": this.tooltipMaxWidth, "data-tooltip-ellipsis-only": t3, "data-tooltip-allow-html": i3 };
      return p.getAttributesText(n2);
    } }, { key: "getOptionObj", value: function(e3) {
      if (e3) {
        var t3 = s.getString, i3 = this.secureText.bind(this);
        return { index: e3.index, value: i3(t3(e3.value)), label: i3(t3(e3.label)), description: i3(t3(e3.description)), alias: this.getAlias(e3.alias), isCurrentNew: e3.isCurrentNew || false, isNew: e3.isNew || false, isVisible: true };
      }
    } }, { key: "getNewOption", value: function() {
      var e3 = this.options[this.lastOptionIndex];
      if (e3 && e3.isCurrentNew)
        return e3;
    } }, { key: "getOptionIndex", value: function(e3) {
      var t3;
      return this.options.some(function(i3) {
        return i3.value === e3 && (t3 = i3.index, true);
      }), t3;
    } }, { key: "getNewValue", value: function() {
      var e3 = {};
      this.newValues.forEach(function(t4) {
        e3[t4] = true;
      });
      var t3 = this.selectedValues.filter(function(t4) {
        return true === e3[t4];
      });
      return this.multiple ? t3 : t3[0];
    } }, { key: "getAlias", value: function(e3) {
      var t3 = e3;
      return t3 && (t3 = (t3 = Array.isArray(t3) ? t3.join(",") : t3.toString().trim()).toLowerCase()), t3 || "";
    } }, { key: "getDisplayValue", value: function() {
      var e3 = [];
      return this.options.forEach(function(t3) {
        t3.isSelected && e3.push(t3.label);
      }), this.multiple ? e3 : e3[0] || "";
    } }, { key: "getSelectedOptions", value: function() {
      var e3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t3 = e3.fullDetails, i3 = void 0 !== t3 && t3, o3 = e3.keepSelectionOrder, s2 = void 0 !== o3 && o3, n2 = this.valueKey, r2 = this.labelKey, a2 = this.selectedValues, l2 = [];
      if (this.options.forEach(function(e4) {
        if (e4.isSelected && !e4.isGroupTitle)
          if (i3)
            l2.push(e4);
          else {
            var t4, o4 = (v(t4 = {}, n2, e4.value), v(t4, r2, e4.label), t4);
            e4.isNew && (o4.isNew = true), e4.customData && (o4.customData = e4.customData), l2.push(o4);
          }
      }), s2) {
        var u2 = {};
        a2.forEach(function(e4, t4) {
          u2[e4] = t4;
        }), l2.sort(function(e4, t4) {
          return u2[e4.value] - u2[t4.value];
        });
      }
      return this.multiple || i3 ? l2 : l2[0];
    } }, { key: "getDisabledOptions", value: function() {
      var e3 = this.valueKey, t3 = this.labelKey, i3 = this.disabledOptions, o3 = {}, s2 = [];
      return i3.forEach(function(e4) {
        o3[e4] = true;
      }), this.options.forEach(function(i4) {
        var n2, r2 = i4.value, a2 = i4.label;
        o3[r2] && s2.push((v(n2 = {}, e3, r2), v(n2, t3, a2), n2));
      }), s2;
    } }, { key: "getVisibleOptionGroupsMapping", value: function(e3) {
      var t3 = this.options, i3 = {}, o3 = this.isOptionVisible.bind(this);
      return (t3 = this.structureOptionGroup(t3)).forEach(function(t4) {
        i3[t4.index] = t4.options.some(function(t5) {
          return o3({ data: t5, searchValue: e3 }).isVisible;
        });
      }), i3;
    } }, { key: "getOptionsCount", value: function(e3) {
      var t3;
      if (this.showAsPopup) {
        var i3 = 80 * window.innerHeight / 100 - 48;
        this.hasSearchContainer && (i3 -= 40), t3 = Math.floor(i3 / this.optionHeight);
      } else
        t3 = parseInt(e3);
      return t3;
    } }, { key: "getOptionsHeight", value: function() {
      return "".concat(this.optionsCount * this.optionHeight, "px");
    } }, { key: "getSibling", value: function(e3, t3) {
      var i3 = "next" === t3 ? "nextElementSibling" : "previousElementSibling", o3 = e3;
      do {
        o3 && (o3 = o3[i3]);
      } while (p.hasClass(o3, "disabled") || p.hasClass(o3, "group-title"));
      return o3;
    } }, { key: "getUniqueId", value: function() {
      var e3 = s.getRandomInt(1e4);
      return document.querySelector("#vscomp-ele-wrapper-".concat(e3)) ? this.getUniqueId() : e3;
    } }, { key: "initDropboxPopover", value: function() {
      var e3 = { ele: this.$ele, target: this.$dropboxContainer, position: this.position, zIndex: this.zIndex, margin: 4, transitionDistance: 30, hideArrowIcon: true, disableManualAction: true, disableUpdatePosition: !this.hasDropboxWrapper, updatePositionThrottle: this.updatePositionThrottle, afterShow: this.afterShowPopper.bind(this), afterHide: this.afterHidePopper.bind(this) };
      this.dropboxPopover = new PopoverComponent(e3);
    } }, { key: "openDropbox", value: function(e3) {
      this.isSilentOpen = e3, e3 ? p.setStyle(this.$dropboxContainer, "display", "inline-flex") : (p.dispatchEvent(this.$ele, "beforeOpen"), p.setAria(this.$wrapper, "expanded", true)), this.setDropboxWrapperWidth(), p.removeClass(this.$allWrappers, "closed"), p.changeTabIndex(this.$allWrappers, 0), this.dropboxPopover && !e3 ? this.dropboxPopover.show() : this.afterShowPopper();
    } }, { key: "afterShowPopper", value: function() {
      var e3 = this.isSilentOpen;
      this.isSilentOpen = false, e3 || (this.moveSelectedOptionsFirst(), this.setScrollTop(), p.addClass(this.$allWrappers, "focused"), this.showAsPopup ? (p.addClass(this.$body, "vscomp-popup-active"), this.isPopupActive = true) : this.focusElementOnOpen(), p.dispatchEvent(this.$ele, "afterOpen"));
    } }, { key: "closeDropbox", value: function(e3) {
      this.isSilentClose = e3, this.keepAlwaysOpen ? this.removeOptionFocus() : (e3 ? p.setStyle(this.$dropboxContainer, "display", "") : (p.dispatchEvent(this.$ele, "beforeClose"), p.setAria(this.$wrapper, "expanded", false), p.setAria(this.$wrapper, "activedescendant", "")), this.dropboxPopover && !e3 ? this.dropboxPopover.hide() : this.afterHidePopper());
    } }, { key: "afterHidePopper", value: function() {
      var e3 = this.isSilentClose;
      this.isSilentClose = false, p.removeClass(this.$allWrappers, "focused"), this.removeOptionFocus(), !e3 && this.isPopupActive && (p.removeClass(this.$body, "vscomp-popup-active"), this.isPopupActive = false), p.addClass(this.$allWrappers, "closed"), e3 || (p.dispatchEvent(this.$ele, "afterClose"), (this.initialSelectedValue && 0 === this.initialSelectedValue.length || this.selectedValues.length > 0) && this.focus());
    } }, { key: "moveSelectedOptionsFirst", value: function() {
      this.showSelectedOptionsFirst && (this.setSortedOptions(), this.$optionsContainer.scrollTop && this.selectedValues.length ? this.scrollToTop() : this.setVisibleOptions());
    } }, { key: "toggleDropbox", value: function() {
      this.isOpened() ? this.closeDropbox() : this.openDropbox();
    } }, { key: "updatePosition", value: function() {
      this.dropboxPopover && this.isOpened() && this.$ele.updatePosition();
    } }, { key: "isOpened", value: function() {
      return !p.hasClass(this.$wrapper, "closed");
    } }, { key: "focusSearchInput", value: function() {
      var e3 = this.$searchInput;
      e3 && e3.focus();
    } }, { key: "focusElementOnOpen", value: function() {
      var e3 = this.$searchInput, t3 = !this.options.length && !this.hasServerSearch;
      if (e3)
        t3 && !this.allowNewOption ? (p.setAttr(e3, "disabled", ""), this.$noOptions.focus()) : e3.focus();
      else {
        var i3 = this.$dropbox.querySelector('[tabindex="0"]');
        void 0 !== p.getData(i3, "index") ? this.focusOption({ direction: "next" }) : i3 ? i3.focus() : this.focusFirstVisibleOption();
      }
    } }, { key: "focusFirstVisibleOption", value: function() {
      var e3 = this.$optionsContainer.querySelector("[data-index='".concat(this.getFirstVisibleOptionIndex(), "']"));
      e3 ? (p.hasClass(e3, "group-title") && (e3 = this.getSibling(e3, "next")), p.setAttr(e3, "tabindex", "0"), this.$optionsContainer.scrollTop = this.optionHeight * this.getFirstVisibleOptionIndex(), this.focusOption({ focusFirst: true }), e3.focus()) : (e3 = this.$dropbox.querySelector('[tabindex="0"]')) && e3.focus();
    } }, { key: "focusOption", value: function() {
      var e3, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, i3 = t3.direction, o3 = t3.$option, s2 = t3.focusFirst, n2 = this.$dropboxContainer.querySelector(".vscomp-option.focused");
      if (o3)
        e3 = o3;
      else if (!n2 || s2) {
        var r2 = this.getFirstVisibleOptionIndex();
        e3 = this.$dropboxContainer.querySelector('.vscomp-option[data-visible-index="'.concat(r2, '"]')), (p.hasClass(e3, "disabled") || p.hasClass(e3, "group-title")) && (e3 = this.getSibling(e3, "next"));
      } else
        e3 = this.getSibling(n2, i3);
      e3 && e3 !== n2 && (n2 && this.toggleOptionFocusedState(n2, false), this.toggleOptionFocusedState(e3, true), this.toggleFocusedProp(p.getData(e3, "index"), true), this.moveFocusedOptionToView(e3));
    } }, { key: "moveFocusedOptionToView", value: function(e3) {
      var t3 = e3 || this.$dropboxContainer.querySelector(".vscomp-option.focused");
      if (t3) {
        var i3, o3 = this.$optionsContainer.getBoundingClientRect(), s2 = t3.getBoundingClientRect(), n2 = o3.top, r2 = o3.bottom, a2 = o3.height, l2 = s2.top, u2 = s2.bottom, c2 = s2.height, h2 = t3.offsetTop, d2 = p.getData(this.$options, "top", "number");
        n2 > l2 ? i3 = h2 + d2 : r2 < u2 && (i3 = h2 - a2 + c2 + d2), void 0 !== i3 && (this.$optionsContainer.scrollTop = i3);
      }
    } }, { key: "removeOptionFocus", value: function() {
      var e3 = this.$dropboxContainer.querySelector(".vscomp-option.focused");
      e3 && (this.toggleOptionFocusedState(e3, false), this.toggleFocusedProp(null));
    } }, { key: "selectOption", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, i3 = t3.event;
      if (e3) {
        var o3 = !p.hasClass(e3, "selected");
        if (o3) {
          if (this.multiple && this.isMaxValuesSelected)
            return;
        } else if (!this.multiple)
          return void this.closeDropbox();
        var n2 = this.selectedValues, r2 = p.getData(e3, "value"), a2 = p.getData(e3, "index", "number"), l2 = p.hasClass(e3, "current-new"), u2 = false, c2 = this.lastSelectedOptionIndex;
        if (this.lastSelectedOptionIndex = null, this.toggleSelectedProp(a2, o3), o3) {
          if (this.multiple)
            n2.push(r2), this.toggleAllOptionsClass(), this.toggleGroupOptionsParent(e3), i3 && i3.shiftKey && (u2 = true);
          else {
            n2.length && this.toggleSelectedProp(this.getOptionIndex(n2[0]), false), n2 = [r2];
            var h2 = this.$dropboxContainer.querySelector(".vscomp-option.selected");
            h2 && this.toggleOptionSelectedState(h2, false), this.closeDropbox(), l2 || this.setSearchValue("");
          }
          this.lastSelectedOptionIndex = a2, this.toggleOptionSelectedState(e3);
        } else
          this.multiple && (this.toggleOptionSelectedState(e3), s.removeItemFromArray(n2, r2), this.toggleAllOptionsClass(false), this.toggleGroupOptionsParent(e3, false));
        l2 && this.beforeSelectNewValue(), this.setValue(n2), u2 && this.selectRangeOptions(c2, a2);
      }
    } }, { key: "selectFocusedOption", value: function() {
      this.selectOption(this.$dropboxContainer.querySelector(".vscomp-option.focused"));
    } }, { key: "selectRangeOptions", value: function(e3, t3) {
      var i3 = this;
      if ("number" == typeof e3 && !this.maxValues) {
        var o3, s2, n2 = this.selectedValues, r2 = this.hasOptionGroup, a2 = {};
        if (e3 < t3 ? (o3 = e3, s2 = t3) : (o3 = t3, s2 = e3), this.options.forEach(function(e4) {
          if (!e4.isDisabled && !e4.isGroupTitle && e4.isVisible && !e4.isSelected) {
            var t4 = e4.index;
            if (t4 > o3 && t4 < s2) {
              if (r2) {
                var i4 = e4.groupIndex;
                "number" == typeof i4 && (a2[i4] = true);
              }
              e4.isSelected = true, n2.push(e4.value);
            }
          }
        }), this.toggleAllOptionsClass(), this.setValue(n2), (a2 = Object.keys(a2)).length) {
          var l2 = this.toggleGroupTitleProp.bind(this);
          a2.forEach(function(e4) {
            l2(parseInt(e4));
          });
        }
        setTimeout(function() {
          i3.renderOptions();
        }, 0);
      }
    } }, { key: "toggleAllOptions", value: function(e3) {
      if (this.multiple && !this.disableSelectAll) {
        var t3 = "boolean" == typeof isSelected ? e3 : !p.hasClass(this.$toggleAllCheckbox, "checked"), i3 = [], o3 = this.selectAllOnlyVisible;
        this.options.forEach(function(e4) {
          var s2 = e4;
          if (!s2.isDisabled && !s2.isCurrentNew) {
            var n2 = s2.isVisible, r2 = s2.isSelected;
            !t3 && (!o3 || n2 || !r2) || t3 && o3 && !n2 && !r2 ? s2.isSelected = false : (s2.isSelected = true, s2.isGroupTitle || i3.push(s2.value));
          }
        }), this.toggleAllOptionsClass(t3), this.setValue(i3), this.renderOptions();
      }
    } }, { key: "toggleAllOptionsClass", value: function(e3) {
      if (this.multiple) {
        var t3 = false;
        "boolean" == typeof e3 || (e3 = this.isAllOptionsSelected()), !e3 && this.selectAllOnlyVisible && ("" !== this.searchValue && this.visibleOptionsCount > 0 || "" == this.searchValue) && (t3 = this.isAllOptionsSelected(true)), p.toggleClass(this.$toggleAllCheckbox, "checked", e3 || t3), this.isAllSelected = e3;
      }
    } }, { key: "isAllOptionsSelected", value: function(e3) {
      var t3 = false;
      return this.options.length && this.selectedValues.length && (t3 = !this.options.some(function(t4) {
        return !t4.isSelected && !t4.isDisabled && !t4.isGroupTitle && (!e3 || t4.isVisible);
      })), t3;
    } }, { key: "isAllGroupOptionsSelected", value: function(e3) {
      var t3 = false;
      return this.options.length && (t3 = !this.options.some(function(t4) {
        return !t4.isSelected && !t4.isDisabled && !t4.isGroupTitle && t4.groupIndex === e3;
      })), t3;
    } }, { key: "toggleGroupOptionsParent", value: function(e3, t3) {
      if (this.hasOptionGroup && !this.disableOptionGroupCheckbox && e3) {
        var i3 = p.getData(e3, "groupIndex");
        void 0 !== i3 && (i3 = parseInt(i3));
        var o3 = this.$options.querySelector('.vscomp-option[data-index="'.concat(i3, '"]')), s2 = "boolean" == typeof t3 ? t3 : this.isAllGroupOptionsSelected(i3);
        this.toggleGroupTitleCheckbox(o3, s2), this.toggleGroupTitleProp(i3, s2);
      }
    } }, { key: "toggleGroupTitleProp", value: function(e3, t3) {
      var i3 = "boolean" == typeof t3 ? t3 : this.isAllGroupOptionsSelected(e3);
      this.toggleSelectedProp(e3, i3);
    } }, { key: "toggleGroupOptions", value: function(e3, t3) {
      var i3 = this;
      if (this.hasOptionGroup && !this.disableOptionGroupCheckbox && e3) {
        var o3 = p.getData(e3, "index", "number"), n2 = this.selectedValues, r2 = this.selectAllOnlyVisible, a2 = {}, l2 = s.removeItemFromArray;
        n2.forEach(function(e4) {
          a2[e4] = true;
        }), this.options.forEach(function(e4) {
          if (!e4.isDisabled && e4.groupIndex === o3) {
            var i4 = e4.value;
            !t3 || r2 && !e4.isVisible ? (e4.isSelected = false, a2[i4] && l2(n2, i4)) : (e4.isSelected = true, a2[i4] || n2.push(i4));
          }
        }), this.toggleAllOptionsClass(!!t3 && null), this.setValue(n2), setTimeout(function() {
          i3.renderOptions();
        }, 0);
      }
    } }, { key: "toggleGroupTitleCheckbox", value: function(e3, t3) {
      if (e3) {
        var i3 = p.getData(e3, "index", "number");
        this.toggleSelectedProp(i3, t3), this.toggleOptionSelectedState(e3, t3);
      }
    } }, { key: "toggleFocusedProp", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      this.focusedOptionIndex && this.setOptionProp(this.focusedOptionIndex, "isFocused", false), this.setOptionProp(e3, "isFocused", t3), this.focusedOptionIndex = e3;
    } }, { key: "toggleSelectedProp", value: function(e3) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      this.setOptionProp(e3, "isSelected", t3);
    } }, { key: "scrollToTop", value: function() {
      var e3 = !this.isOpened();
      e3 && this.openDropbox(true), this.$optionsContainer.scrollTop > 0 && (this.$optionsContainer.scrollTop = 0), e3 && this.closeDropbox(true);
    } }, { key: "reset", value: function() {
      var e3 = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
      this.options.forEach(function(e4) {
        e4.isSelected = false;
      }), this.beforeValueSet(true), this.setValue(null, { disableValidation: e3 }), this.afterValueSet(), e3 && p.removeClass(this.$allWrappers, "has-error"), p.dispatchEvent(this.$ele, "reset");
    } }, { key: "addOption", value: function(e3, t3) {
      if (e3) {
        this.lastOptionIndex += 1;
        var i3 = this.getOptionObj(d(d({}, e3), {}, { index: this.lastOptionIndex }));
        this.options.push(i3), this.sortedOptions.push(i3), t3 && (this.visibleOptionsCount += 1, this.afterSetOptions());
      }
    } }, { key: "removeOption", value: function(e3) {
      (e3 || 0 === e3) && (this.options.splice(e3, 1), this.lastOptionIndex -= 1);
    } }, { key: "removeNewOption", value: function() {
      var e3 = this.getNewOption();
      e3 && this.removeOption(e3.index);
    } }, { key: "sortOptions", value: function(e3) {
      return e3.sort(function(e4, t3) {
        var i3 = e4.isSelected || e4.isAnySelected, o3 = t3.isSelected || t3.isAnySelected;
        return i3 || o3 ? i3 && (!o3 || e4.index < t3.index) ? -1 : 1 : 0;
      });
    } }, { key: "sortOptionsGroup", value: function(e3) {
      var t3 = this.sortOptions.bind(this), i3 = this.structureOptionGroup(e3);
      return i3.forEach(function(e4) {
        var i4 = e4.options;
        e4.isAnySelected = i4.some(function(e5) {
          return e5.isSelected;
        }), e4.isAnySelected && t3(i4);
      }), t3(i3), this.destructureOptionGroup(i3);
    } }, { key: "isOptionVisible", value: function(e3) {
      var t3 = e3.data, i3 = e3.searchValue, o3 = e3.hasExactOption, s2 = e3.visibleOptionGroupsMapping, n2 = e3.searchGroup, r2 = e3.searchByStartsWith, a2 = t3.value.toLowerCase(), l2 = this.searchNormalize ? t3.labelNormalized : t3.label.toLowerCase(), u2 = t3.description, c2 = t3.alias, p2 = r2 ? l2.startsWith(i3) : l2.includes(i3);
      return !t3.isGroupTitle || n2 && p2 || (p2 = s2[t3.index]), r2 || !c2 || p2 || (p2 = c2.includes(i3)), r2 || !u2 || p2 || (p2 = u2.toLowerCase().includes(i3)), t3.isVisible = p2, o3 || (o3 = l2 === i3 || a2 === i3), { isVisible: p2, hasExactOption: o3 };
    } }, { key: "structureOptionGroup", value: function(e3) {
      var t3 = [], i3 = {};
      return e3.forEach(function(e4) {
        if (e4.isGroupTitle) {
          var o3 = [];
          e4.options = o3, i3[e4.index] = o3, t3.push(e4);
        }
      }), e3.forEach(function(e4) {
        e4.isGroupOption && i3[e4.groupIndex].push(e4);
      }), t3;
    } }, { key: "destructureOptionGroup", value: function(e3) {
      var t3 = [];
      return e3.forEach(function(e4) {
        t3.push(e4), t3 = t3.concat(e4.options);
      }), t3;
    } }, { key: "serverSearch", value: function() {
      p.removeClass(this.$allWrappers, "has-no-search-results"), p.addClass(this.$allWrappers, "server-searching"), this.setSelectedOptions(), this.onServerSearch(this.searchValue, this);
    } }, { key: "removeValue", value: function(e3) {
      var t3 = this.selectedValues, i3 = p.getData(e3, "value");
      s.removeItemFromArray(t3, i3), this.setValueMethod(t3);
    } }, { key: "focus", value: function() {
      this.$wrapper.focus();
    } }, { key: "enable", value: function() {
      this.$ele.disabled = false, this.$ele.removeAttribute("disabled"), this.$hiddenInput.removeAttribute("disabled"), p.setAria(this.$wrapper, "disabled", false), p.changeTabIndex(this.$wrapper, 0);
    } }, { key: "disable", value: function() {
      this.$ele.disabled = true, this.$ele.setAttribute("disabled", ""), this.$hiddenInput.setAttribute("disabled", ""), p.setAria(this.$wrapper, "disabled", true), p.changeTabIndex(this.$wrapper, -1), this.$wrapper.blur();
    } }, { key: "validate", value: function() {
      if (this.disableValidation)
        return true;
      var e3 = false, t3 = this.selectedValues, i3 = this.minValues;
      return this.required && (s.isEmpty(t3) || this.multiple && i3 && t3.length < i3) && (e3 = true), p.toggleClass(this.$allWrappers, "has-error", e3), !e3;
    } }, { key: "destroy", value: function() {
      var e3 = this.$ele;
      e3.virtualSelect = void 0, e3.value = void 0, e3.innerHTML = "", this.hasDropboxWrapper && (this.$dropboxWrapper.remove(), this.removeEvents()), this.dropboxPopover && this.dropboxPopover.destroy(), p.removeClass(e3, "vscomp-ele");
    } }, { key: "createSecureTextElements", value: function() {
      this.$secureDiv = document.createElement("div"), this.$secureText = document.createTextNode(""), this.$secureDiv.appendChild(this.$secureText);
    } }, { key: "secureText", value: function(e3) {
      return e3 && this.enableSecureText ? (this.$secureText.nodeValue = e3, this.$secureDiv.innerHTML) : e3;
    } }, { key: "toggleRequired", value: function(e3) {
      this.required = s.convertToBoolean(e3), this.$ele.required = this.required;
    } }, { key: "toggleOptionSelectedState", value: function(e3, t3) {
      var i3 = t3;
      void 0 === i3 && (i3 = !p.hasClass(e3, "selected")), p.toggleClass(e3, "selected", i3), p.setAria(e3, "selected", i3);
    } }, { key: "toggleOptionFocusedState", value: function(e3, t3) {
      e3 && (p.toggleClass(e3, "focused", t3), p.setAttr(e3, "tabindex", t3 ? "0" : "-1"), document.activeElement !== this.$searchInput && e3.focus(), t3 && p.setAria(this.$wrapper, "activedescendant", e3.id));
    } }]) && O(t2.prototype, i2), o2 && O(t2, o2), Object.defineProperty(t2, "prototype", { writable: false }), e2;
  }();
  document.addEventListener("reset", $.onFormReset), document.addEventListener("submit", $.onFormSubmit), window.addEventListener("resize", $.onResizeMethod), x = $.getAttrProps(), window.VirtualSelect = $, "undefined" != typeof NodeList && NodeList.prototype && !NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach);
}(), function() {
  function e(e2) {
    return function(e3) {
      if (Array.isArray(e3))
        return t(e3);
    }(e2) || function(e3) {
      if ("undefined" != typeof Symbol && null != e3[Symbol.iterator] || null != e3["@@iterator"])
        return Array.from(e3);
    }(e2) || function(e3, i2) {
      if (e3) {
        if ("string" == typeof e3)
          return t(e3, i2);
        var o2 = Object.prototype.toString.call(e3).slice(8, -1);
        return "Object" === o2 && e3.constructor && (o2 = e3.constructor.name), "Map" === o2 || "Set" === o2 ? Array.from(e3) : "Arguments" === o2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o2) ? t(e3, i2) : void 0;
      }
    }(e2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function t(e2, t2) {
    (null == t2 || t2 > e2.length) && (t2 = e2.length);
    for (var i2 = 0, o2 = new Array(t2); i2 < t2; i2++)
      o2[i2] = e2[i2];
    return o2;
  }
  var i = function() {
    function t2() {
      !function(e2, t3) {
        if (!(e2 instanceof t3))
          throw new TypeError("Cannot call a class as a function");
      }(this, t2);
    }
    var i2;
    return (i2 = [{ key: "addClass", value: function(i3, o2) {
      i3 && (o2 = o2.split(" "), t2.getElements(i3).forEach(function(t3) {
        var i4;
        (i4 = t3.classList).add.apply(i4, e(o2));
      }));
    } }, { key: "removeClass", value: function(i3, o2) {
      i3 && (o2 = o2.split(" "), t2.getElements(i3).forEach(function(t3) {
        var i4;
        (i4 = t3.classList).remove.apply(i4, e(o2));
      }));
    } }, { key: "getElements", value: function(e2) {
      if (e2)
        return void 0 === e2.forEach && (e2 = [e2]), e2;
    } }, { key: "getMoreVisibleSides", value: function(e2) {
      if (!e2)
        return {};
      var t3 = e2.getBoundingClientRect(), i3 = window.innerWidth, o2 = window.innerHeight, s2 = t3.left, n2 = t3.top;
      return { horizontal: s2 > i3 - s2 - t3.width ? "left" : "right", vertical: n2 > o2 - n2 - t3.height ? "top" : "bottom" };
    } }, { key: "getAbsoluteCoords", value: function(e2) {
      if (e2) {
        var t3 = e2.getBoundingClientRect(), i3 = window.pageXOffset, o2 = window.pageYOffset;
        return { width: t3.width, height: t3.height, top: t3.top + o2, right: t3.right + i3, bottom: t3.bottom + o2, left: t3.left + i3 };
      }
    } }, { key: "getCoords", value: function(e2) {
      return e2 ? e2.getBoundingClientRect() : {};
    } }, { key: "getData", value: function(e2, t3, i3) {
      if (e2) {
        var o2 = e2 ? e2.dataset[t3] : "";
        return "number" === i3 ? o2 = parseFloat(o2) || 0 : "true" === o2 ? o2 = true : "false" === o2 && (o2 = false), o2;
      }
    } }, { key: "setData", value: function(e2, t3, i3) {
      e2 && (e2.dataset[t3] = i3);
    } }, { key: "setStyle", value: function(e2, t3, i3) {
      e2 && (e2.style[t3] = i3);
    } }, { key: "show", value: function(e2) {
      var i3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "block";
      t2.setStyle(e2, "display", i3);
    } }, { key: "hide", value: function(e2) {
      t2.setStyle(e2, "display", "none");
    } }, { key: "getHideableParent", value: function(e2) {
      for (var t3, i3 = e2.parentElement; i3; ) {
        var o2 = getComputedStyle(i3).overflow;
        if (-1 !== o2.indexOf("scroll") || -1 !== o2.indexOf("auto")) {
          t3 = i3;
          break;
        }
        i3 = i3.parentElement;
      }
      return t3;
    } }]) && function(e2, t3) {
      for (var i3 = 0; i3 < t3.length; i3++) {
        var o2 = t3[i3];
        o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, o2.key, o2);
      }
    }(t2, i2), t2;
  }(), o = ["top", "bottom", "left", "right"].map(function(e2) {
    return "position-".concat(e2);
  }), s = { top: "rotate(180deg)", left: "rotate(90deg)", right: "rotate(-90deg)" }, n = function() {
    function e2(t3) {
      !function(e3, t4) {
        if (!(e3 instanceof t4))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
      try {
        this.setProps(t3), this.init();
      } catch (e3) {
        console.warn("Couldn't initiate popper"), console.error(e3);
      }
    }
    var t2;
    return (t2 = [{ key: "init", value: function() {
      var e3 = this.$popperEle;
      e3 && this.$triggerEle && (i.setStyle(e3, "zIndex", this.zIndex), this.setPosition());
    } }, { key: "setProps", value: function(e3) {
      var t3 = (e3 = this.setDefaultProps(e3)).position ? e3.position.toLowerCase() : "auto";
      if (this.$popperEle = e3.$popperEle, this.$triggerEle = e3.$triggerEle, this.$arrowEle = e3.$arrowEle, this.margin = parseFloat(e3.margin), this.offset = parseFloat(e3.offset), this.enterDelay = parseFloat(e3.enterDelay), this.exitDelay = parseFloat(e3.exitDelay), this.showDuration = parseFloat(e3.showDuration), this.hideDuration = parseFloat(e3.hideDuration), this.transitionDistance = parseFloat(e3.transitionDistance), this.zIndex = parseFloat(e3.zIndex), this.afterShowCallback = e3.afterShow, this.afterHideCallback = e3.afterHide, this.hasArrow = !!this.$arrowEle, -1 !== t3.indexOf(" ")) {
        var i2 = t3.split(" ");
        this.position = i2[0], this.secondaryPosition = i2[1];
      } else
        this.position = t3;
    } }, { key: "setDefaultProps", value: function(e3) {
      return Object.assign({ position: "auto", margin: 8, offset: 5, enterDelay: 0, exitDelay: 0, showDuration: 300, hideDuration: 200, transitionDistance: 10, zIndex: 1 }, e3);
    } }, { key: "setPosition", value: function() {
      i.show(this.$popperEle, "inline-flex");
      var e3, t3, n2, r = window.innerWidth, a = window.innerHeight, l = i.getAbsoluteCoords(this.$popperEle), u = i.getAbsoluteCoords(this.$triggerEle), c = l.width, p = l.height, h = l.top, d = l.right, v = l.bottom, f = l.left, y = u.width, b = u.height, m = u.top, g = u.right, O = u.bottom, S = u.left, x = m - h, w = S - f, k = w, E = x, C = this.position, $ = this.secondaryPosition, A = y / 2 - c / 2, T = b / 2 - p / 2, D = this.margin, V = this.transitionDistance, P = window.scrollY - h, I = a + P, M = window.scrollX - f, F = r + M, L = this.offset;
      L && (P += L, I -= L, M += L, F -= L), "auto" === C && (C = i.getMoreVisibleSides(this.$triggerEle).vertical);
      var G = { top: { top: E - p - D, left: k + A }, bottom: { top: E + b + D, left: k + A }, right: { top: E + T, left: k + y + D }, left: { top: E + T, left: k - c - D } }, H = G[C];
      if (E = H.top, k = H.left, $ && ("top" === $ ? E = x : "bottom" === $ ? E = x + b - p : "left" === $ ? k = w : "right" === $ && (k = w + y - c)), k < M ? "left" === C ? n2 = "right" : k = M + f > g ? g - f : M : k + c > F && ("right" === C ? n2 = "left" : k = F + f < S ? S - d : F - c), E < P ? "top" === C ? n2 = "bottom" : E = P + h > O ? O - h : P : E + p > I && ("bottom" === C ? n2 = "top" : E = I + h < m ? m - v : I - p), n2) {
        var N = G[n2];
        "top" === (C = n2) || "bottom" === C ? E = N.top : "left" !== C && "right" !== C || (k = N.left);
      }
      "top" === C ? (e3 = E + V, t3 = k) : "right" === C ? (e3 = E, t3 = k - V) : "left" === C ? (e3 = E, t3 = k + V) : (e3 = E - V, t3 = k);
      var W = "translate3d(".concat(t3, "px, ").concat(e3, "px, 0)");
      if (i.setStyle(this.$popperEle, "transform", W), i.setData(this.$popperEle, "fromLeft", t3), i.setData(this.$popperEle, "fromTop", e3), i.setData(this.$popperEle, "top", E), i.setData(this.$popperEle, "left", k), i.removeClass(this.$popperEle, o.join(" ")), i.addClass(this.$popperEle, "position-".concat(C)), this.hasArrow) {
        var q = 0, j = 0, B = k + f, R = E + h, z = this.$arrowEle.offsetWidth / 2, K = s[C] || "";
        "top" === C || "bottom" === C ? (q = y / 2 + S - B) < z ? q = z : q > c - z && (q = c - z) : "left" !== C && "right" !== C || ((j = b / 2 + m - R) < z ? j = z : j > p - z && (j = p - z)), i.setStyle(this.$arrowEle, "transform", "translate3d(".concat(q, "px, ").concat(j, "px, 0) ").concat(K));
      }
      i.hide(this.$popperEle);
    } }, { key: "resetPosition", value: function() {
      i.setStyle(this.$popperEle, "transform", "none"), this.setPosition();
    } }, { key: "show", value: function() {
      var e3 = this, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, o2 = t3.resetPosition, s2 = t3.data;
      clearTimeout(this.exitDelayTimeout), clearTimeout(this.hideDurationTimeout), o2 && this.resetPosition(), this.enterDelayTimeout = setTimeout(function() {
        var t4 = i.getData(e3.$popperEle, "left"), o3 = i.getData(e3.$popperEle, "top"), n2 = "translate3d(".concat(t4, "px, ").concat(o3, "px, 0)"), r = e3.showDuration;
        i.show(e3.$popperEle, "inline-flex"), i.getCoords(e3.$popperEle), i.setStyle(e3.$popperEle, "transitionDuration", r + "ms"), i.setStyle(e3.$popperEle, "transform", n2), i.setStyle(e3.$popperEle, "opacity", 1), e3.showDurationTimeout = setTimeout(function() {
          "function" == typeof e3.afterShowCallback && e3.afterShowCallback(s2);
        }, r);
      }, this.enterDelay);
    } }, { key: "hide", value: function() {
      var e3 = this, t3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, o2 = t3.data;
      clearTimeout(this.enterDelayTimeout), clearTimeout(this.showDurationTimeout), this.exitDelayTimeout = setTimeout(function() {
        if (e3.$popperEle) {
          var t4 = i.getData(e3.$popperEle, "fromLeft"), s2 = i.getData(e3.$popperEle, "fromTop"), n2 = "translate3d(".concat(t4, "px, ").concat(s2, "px, 0)"), r = e3.hideDuration;
          i.setStyle(e3.$popperEle, "transitionDuration", r + "ms"), i.setStyle(e3.$popperEle, "transform", n2), i.setStyle(e3.$popperEle, "opacity", 0), e3.hideDurationTimeout = setTimeout(function() {
            i.hide(e3.$popperEle), "function" == typeof e3.afterHideCallback && e3.afterHideCallback(o2);
          }, r);
        }
      }, this.exitDelay);
    } }, { key: "updatePosition", value: function() {
      i.setStyle(this.$popperEle, "transitionDuration", "0ms"), this.resetPosition();
      var e3 = i.getData(this.$popperEle, "left"), t3 = i.getData(this.$popperEle, "top");
      i.show(this.$popperEle, "inline-flex"), i.setStyle(this.$popperEle, "transform", "translate3d(".concat(e3, "px, ").concat(t3, "px, 0)"));
    } }]) && function(e3, t3) {
      for (var i2 = 0; i2 < t3.length; i2++) {
        var o2 = t3[i2];
        o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e3, o2.key, o2);
      }
    }(e2.prototype, t2), e2;
  }();
  window.PopperComponent = n;
}(), function() {
  function e(e2, t2) {
    for (var i2 = 0; i2 < t2.length; i2++) {
      var o2 = t2[i2];
      o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, o2.key, o2);
    }
  }
  var t = function() {
    function t2() {
      !function(e2, t3) {
        if (!(e2 instanceof t3))
          throw new TypeError("Cannot call a class as a function");
      }(this, t2);
    }
    var i2, o2;
    return i2 = t2, (o2 = [{ key: "convertToBoolean", value: function(e2) {
      var t3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      return true === e2 || "true" === e2 || false !== e2 && "false" !== e2 && t3;
    } }, { key: "removeArrayEmpty", value: function(e2) {
      return Array.isArray(e2) && e2.length ? e2.filter(function(e3) {
        return !!e3;
      }) : [];
    } }, { key: "throttle", value: function(e2, t3) {
      var i3, o3 = 0;
      return function() {
        for (var s2 = arguments.length, n2 = new Array(s2), r2 = 0; r2 < s2; r2++)
          n2[r2] = arguments[r2];
        var a2 = (/* @__PURE__ */ new Date()).getTime(), l2 = t3 - (a2 - o3);
        clearTimeout(i3), l2 <= 0 ? (o3 = a2, e2.apply(void 0, n2)) : i3 = setTimeout(function() {
          e2.apply(void 0, n2);
        }, l2);
      };
    } }]) && e(i2, o2), Object.defineProperty(i2, "prototype", { writable: false }), t2;
  }();
  function i(e2) {
    return function(e3) {
      if (Array.isArray(e3))
        return o(e3);
    }(e2) || function(e3) {
      if ("undefined" != typeof Symbol && null != e3[Symbol.iterator] || null != e3["@@iterator"])
        return Array.from(e3);
    }(e2) || function(e3, t2) {
      if (e3) {
        if ("string" == typeof e3)
          return o(e3, t2);
        var i2 = Object.prototype.toString.call(e3).slice(8, -1);
        return "Object" === i2 && e3.constructor && (i2 = e3.constructor.name), "Map" === i2 || "Set" === i2 ? Array.from(e3) : "Arguments" === i2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i2) ? o(e3, t2) : void 0;
      }
    }(e2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function o(e2, t2) {
    (null == t2 || t2 > e2.length) && (t2 = e2.length);
    for (var i2 = 0, o2 = new Array(t2); i2 < t2; i2++)
      o2[i2] = e2[i2];
    return o2;
  }
  function s(e2, t2) {
    for (var i2 = 0; i2 < t2.length; i2++) {
      var o2 = t2[i2];
      o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, o2.key, o2);
    }
  }
  var n = function() {
    function e2() {
      !function(e3, t2) {
        if (!(e3 instanceof t2))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
    }
    var o2, n2;
    return o2 = e2, (n2 = [{ key: "addClass", value: function(t2, o3) {
      t2 && (o3 = o3.split(" "), e2.getElements(t2).forEach(function(e3) {
        var t3;
        (t3 = e3.classList).add.apply(t3, i(o3));
      }));
    } }, { key: "removeClass", value: function(t2, o3) {
      t2 && (o3 = o3.split(" "), e2.getElements(t2).forEach(function(e3) {
        var t3;
        (t3 = e3.classList).remove.apply(t3, i(o3));
      }));
    } }, { key: "hasClass", value: function(e3, t2) {
      return !!e3 && e3.classList.contains(t2);
    } }, { key: "getElement", value: function(e3) {
      return e3 && ("string" == typeof e3 ? e3 = document.querySelector(e3) : void 0 !== e3.length && (e3 = e3[0])), e3 || null;
    } }, { key: "getElements", value: function(e3) {
      if (e3)
        return void 0 === e3.forEach && (e3 = [e3]), e3;
    } }, { key: "addEvent", value: function(t2, i2, o3) {
      e2.addOrRemoveEvent(t2, i2, o3, "add");
    } }, { key: "removeEvent", value: function(t2, i2, o3) {
      e2.addOrRemoveEvent(t2, i2, o3, "remove");
    } }, { key: "addOrRemoveEvent", value: function(i2, o3, s2, n3) {
      i2 && (o3 = t.removeArrayEmpty(o3.split(" "))).forEach(function(t2) {
        (i2 = e2.getElements(i2)).forEach(function(e3) {
          "add" === n3 ? e3.addEventListener(t2, s2) : e3.removeEventListener(t2, s2);
        });
      });
    } }, { key: "getScrollableParents", value: function(e3) {
      if (!e3)
        return [];
      for (var t2 = [window], i2 = e3.parentElement; i2; ) {
        var o3 = getComputedStyle(i2).overflow;
        -1 === o3.indexOf("scroll") && -1 === o3.indexOf("auto") || t2.push(i2), i2 = i2.parentElement;
      }
      return t2;
    } }, { key: "convertPropToDataAttr", value: function(e3) {
      return e3 ? "data-popover-".concat(e3).replace(/([A-Z])/g, "-$1").toLowerCase() : "";
    } }]) && s(o2, n2), Object.defineProperty(o2, "prototype", { writable: false }), e2;
  }();
  function r(e2, t2) {
    for (var i2 = 0; i2 < t2.length; i2++) {
      var o2 = t2[i2];
      o2.enumerable = o2.enumerable || false, o2.configurable = true, "value" in o2 && (o2.writable = true), Object.defineProperty(e2, o2.key, o2);
    }
  }
  var a, l = { 27: "onEscPress" }, u = ["target", "position", "margin", "offset", "enterDelay", "exitDelay", "showDuration", "hideDuration", "transitionDistance", "updatePositionThrottle", "zIndex", "hideOnOuterClick", "showOnHover", "hideArrowIcon", "disableManualAction", "disableUpdatePosition"], c = function() {
    function e2(t2) {
      !function(e3, t3) {
        if (!(e3 instanceof t3))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
      try {
        this.setProps(t2), this.init();
      } catch (e3) {
        console.warn("Couldn't initiate Popover component"), console.error(e3);
      }
    }
    var i2, o2, s2;
    return i2 = e2, s2 = [{ key: "init", value: function(t2) {
      var i3 = t2.ele;
      if (i3) {
        var o3 = false;
        if ("string" == typeof i3) {
          if (!(i3 = document.querySelectorAll(i3)))
            return;
          1 === i3.length && (o3 = true);
        }
        void 0 === i3.length && (i3 = [i3], o3 = true);
        var s3 = [];
        return i3.forEach(function(i4) {
          t2.ele = i4, e2.destroy(i4), s3.push(new e2(t2));
        }), o3 ? s3[0] : s3;
      }
    } }, { key: "destroy", value: function(e3) {
      if (e3) {
        var t2 = e3.popComp;
        t2 && t2.destroy();
      }
    } }, { key: "showMethod", value: function() {
      this.popComp.show();
    } }, { key: "hideMethod", value: function() {
      this.popComp.hide();
    } }, { key: "updatePositionMethod", value: function() {
      this.popComp.popper.updatePosition();
    } }, { key: "getAttrProps", value: function() {
      var e3 = n.convertPropToDataAttr, t2 = {};
      return u.forEach(function(i3) {
        t2[e3(i3)] = i3;
      }), t2;
    } }], (o2 = [{ key: "init", value: function() {
      this.$popover && (this.setElementProps(), this.renderArrow(), this.initPopper(), this.addEvents());
    } }, { key: "getEvents", value: function() {
      var e3 = [{ $ele: document, event: "click", method: "onDocumentClick" }, { $ele: document, event: "keydown", method: "onDocumentKeyDown" }];
      return this.disableManualAction || (e3.push({ $ele: this.$ele, event: "click", method: "onTriggerEleClick" }), this.showOnHover && (e3.push({ $ele: this.$ele, event: "mouseenter", method: "onTriggerEleMouseEnter" }), e3.push({ $ele: this.$ele, event: "mouseleave", method: "onTriggerEleMouseLeave" }))), e3;
    } }, { key: "addOrRemoveEvents", value: function(e3) {
      var t2 = this;
      this.getEvents().forEach(function(i3) {
        t2.addOrRemoveEvent({ action: e3, $ele: i3.$ele, events: i3.event, method: i3.method });
      });
    } }, { key: "addEvents", value: function() {
      this.addOrRemoveEvents("add");
    } }, { key: "removeEvents", value: function() {
      this.addOrRemoveEvents("remove"), this.removeScrollEventListeners(), this.removeResizeEventListeners();
    } }, { key: "addOrRemoveEvent", value: function(e3) {
      var i3 = this, o3 = e3.action, s3 = e3.$ele, r2 = e3.events, a2 = e3.method, l2 = e3.throttle;
      s3 && (r2 = t.removeArrayEmpty(r2.split(" "))).forEach(function(e4) {
        var r3 = "".concat(a2, "-").concat(e4), u2 = i3.events[r3];
        u2 || (u2 = i3[a2].bind(i3), l2 && (u2 = t.throttle(u2, l2)), i3.events[r3] = u2), "add" === o3 ? n.addEvent(s3, e4, u2) : n.removeEvent(s3, e4, u2);
      });
    } }, { key: "addScrollEventListeners", value: function() {
      this.$scrollableElems = n.getScrollableParents(this.$ele), this.addOrRemoveEvent({ action: "add", $ele: this.$scrollableElems, events: "scroll", method: "onAnyParentScroll", throttle: this.updatePositionThrottle });
    } }, { key: "removeScrollEventListeners", value: function() {
      this.$scrollableElems && (this.addOrRemoveEvent({ action: "remove", $ele: this.$scrollableElems, events: "scroll", method: "onAnyParentScroll" }), this.$scrollableElems = null);
    } }, { key: "addResizeEventListeners", value: function() {
      this.addOrRemoveEvent({ action: "add", $ele: window, events: "resize", method: "onResize", throttle: this.updatePositionThrottle });
    } }, { key: "removeResizeEventListeners", value: function() {
      this.addOrRemoveEvent({ action: "remove", $ele: window, events: "resize", method: "onResize" });
    } }, { key: "onAnyParentScroll", value: function() {
      this.popper.updatePosition();
    } }, { key: "onResize", value: function() {
      this.popper.updatePosition();
    } }, { key: "onDocumentClick", value: function(e3) {
      var t2 = e3.target, i3 = t2.closest(".pop-comp-ele"), o3 = t2.closest(".pop-comp-wrapper");
      this.hideOnOuterClick && i3 !== this.$ele && o3 !== this.$popover && this.hide();
    } }, { key: "onDocumentKeyDown", value: function(e3) {
      var t2 = e3.which || e3.keyCode, i3 = l[t2];
      i3 && this[i3](e3);
    } }, { key: "onEscPress", value: function() {
      this.hideOnOuterClick && this.hide();
    } }, { key: "onTriggerEleClick", value: function() {
      this.toggle();
    } }, { key: "onTriggerEleMouseEnter", value: function() {
      this.show();
    } }, { key: "onTriggerEleMouseLeave", value: function() {
      this.hide();
    } }, { key: "setProps", value: function(e3) {
      e3 = this.setDefaultProps(e3), this.setPropsFromElementAttr(e3);
      var i3 = t.convertToBoolean;
      this.$ele = e3.ele, this.target = e3.target, this.position = e3.position, this.margin = parseFloat(e3.margin), this.offset = parseFloat(e3.offset), this.enterDelay = parseFloat(e3.enterDelay), this.exitDelay = parseFloat(e3.exitDelay), this.showDuration = parseFloat(e3.showDuration), this.hideDuration = parseFloat(e3.hideDuration), this.transitionDistance = parseFloat(e3.transitionDistance), this.updatePositionThrottle = parseFloat(e3.updatePositionThrottle), this.zIndex = parseFloat(e3.zIndex), this.hideOnOuterClick = i3(e3.hideOnOuterClick), this.showOnHover = i3(e3.showOnHover), this.hideArrowIcon = i3(e3.hideArrowIcon), this.disableManualAction = i3(e3.disableManualAction), this.disableUpdatePosition = i3(e3.disableUpdatePosition), this.beforeShowCallback = e3.beforeShow, this.afterShowCallback = e3.afterShow, this.beforeHideCallback = e3.beforeHide, this.afterHideCallback = e3.afterHide, this.events = {}, this.$popover = n.getElement(this.target);
    } }, { key: "setDefaultProps", value: function(e3) {
      return Object.assign({ position: "auto", margin: 8, offset: 5, enterDelay: 0, exitDelay: 0, showDuration: 300, hideDuration: 200, transitionDistance: 10, updatePositionThrottle: 100, zIndex: 1, hideOnOuterClick: true, showOnHover: false, hideArrowIcon: false, disableManualAction: false, disableUpdatePosition: false }, e3);
    } }, { key: "setPropsFromElementAttr", value: function(e3) {
      var t2 = e3.ele;
      for (var i3 in a) {
        var o3 = t2.getAttribute(i3);
        o3 && (e3[a[i3]] = o3);
      }
    } }, { key: "setElementProps", value: function() {
      var t2 = this.$ele;
      t2.popComp = this, t2.show = e2.showMethod, t2.hide = e2.hideMethod, t2.updatePosition = e2.updatePositionMethod, n.addClass(this.$ele, "pop-comp-ele"), n.addClass(this.$popover, "pop-comp-wrapper");
    } }, { key: "getOtherTriggerPopComp", value: function() {
      var e3, t2 = this.$popover.popComp;
      return t2 && t2.$ele !== this.$ele && (e3 = t2), e3;
    } }, { key: "initPopper", value: function() {
      var e3 = { $popperEle: this.$popover, $triggerEle: this.$ele, $arrowEle: this.$arrowEle, position: this.position, margin: this.margin, offset: this.offset, enterDelay: this.enterDelay, exitDelay: this.exitDelay, showDuration: this.showDuration, hideDuration: this.hideDuration, transitionDistance: this.transitionDistance, zIndex: this.zIndex, afterShow: this.afterShow.bind(this), afterHide: this.afterHide.bind(this) };
      this.popper = new PopperComponent(e3);
    } }, { key: "beforeShow", value: function() {
      "function" == typeof this.beforeShowCallback && this.beforeShowCallback(this);
    } }, { key: "beforeHide", value: function() {
      "function" == typeof this.beforeHideCallback && this.beforeHideCallback(this);
    } }, { key: "show", value: function() {
      this.isShown() || (this.isShownForOtherTrigger() ? this.showAfterOtherHide() : (n.addClass(this.$popover, "pop-comp-disable-events"), this.$popover.popComp = this, this.beforeShow(), this.popper.show({ resetPosition: true }), n.addClass(this.$ele, "pop-comp-active")));
    } }, { key: "hide", value: function() {
      this.isShown() && (this.beforeHide(), this.popper.hide(), this.removeScrollEventListeners(), this.removeResizeEventListeners());
    } }, { key: "toggle", value: function(e3) {
      void 0 === e3 && (e3 = !this.isShown()), e3 ? this.show() : this.hide();
    } }, { key: "isShown", value: function() {
      return n.hasClass(this.$ele, "pop-comp-active");
    } }, { key: "isShownForOtherTrigger", value: function() {
      var e3 = this.getOtherTriggerPopComp();
      return !!e3 && e3.isShown();
    } }, { key: "showAfterOtherHide", value: function() {
      var e3 = this, t2 = this.getOtherTriggerPopComp();
      if (t2) {
        var i3 = t2.exitDelay + t2.hideDuration + 100;
        setTimeout(function() {
          e3.show();
        }, i3);
      }
    } }, { key: "afterShow", value: function() {
      var e3 = this;
      this.showOnHover ? setTimeout(function() {
        n.removeClass(e3.$popover, "pop-comp-disable-events");
      }, 2e3) : n.removeClass(this.$popover, "pop-comp-disable-events"), this.disableUpdatePosition || (this.addScrollEventListeners(), this.addResizeEventListeners()), "function" == typeof this.afterShowCallback && this.afterShowCallback(this);
    } }, { key: "afterHide", value: function() {
      n.removeClass(this.$ele, "pop-comp-active"), "function" == typeof this.afterHideCallback && this.afterHideCallback(this);
    } }, { key: "renderArrow", value: function() {
      if (!this.hideArrowIcon) {
        var e3 = this.$popover.querySelector(".pop-comp-arrow");
        e3 || (this.$popover.insertAdjacentHTML("afterbegin", '<i class="pop-comp-arrow"></i>'), e3 = this.$popover.querySelector(".pop-comp-arrow")), this.$arrowEle = e3;
      }
    } }, { key: "destroy", value: function() {
      this.removeEvents();
    } }]) && r(i2.prototype, o2), s2 && r(i2, s2), Object.defineProperty(i2, "prototype", { writable: false }), e2;
  }();
  a = c.getAttrProps(), window.PopoverComponent = c;
}();
const tooltip_min = "";
/*!
 * Tooltip v1.0.16
 * https://sa-si-dev.github.io/tooltip
 * Licensed under MIT (https://github.com/sa-si-dev/tooltip/blob/master/LICENSE)
 */
!function() {
  function t(t2) {
    return function(t3) {
      if (Array.isArray(t3))
        return e(t3);
    }(t2) || function(t3) {
      if ("undefined" != typeof Symbol && null != t3[Symbol.iterator] || null != t3["@@iterator"])
        return Array.from(t3);
    }(t2) || function(t3, o2) {
      if (t3) {
        if ("string" == typeof t3)
          return e(t3, o2);
        var i2 = Object.prototype.toString.call(t3).slice(8, -1);
        return "Object" === i2 && t3.constructor && (i2 = t3.constructor.name), "Map" === i2 || "Set" === i2 ? Array.from(t3) : "Arguments" === i2 || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i2) ? e(t3, o2) : void 0;
      }
    }(t2) || function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }();
  }
  function e(t2, e2) {
    (null == e2 || e2 > t2.length) && (e2 = t2.length);
    for (var o2 = 0, i2 = new Array(e2); o2 < e2; o2++)
      i2[o2] = t2[o2];
    return i2;
  }
  function o(t2, e2) {
    for (var o2 = 0; o2 < e2.length; o2++) {
      var i2 = e2[o2];
      i2.enumerable = i2.enumerable || false, i2.configurable = true, "value" in i2 && (i2.writable = true), Object.defineProperty(t2, i2.key, i2);
    }
  }
  var i = function() {
    function e2() {
      !function(t2, e3) {
        if (!(t2 instanceof e3))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
    }
    var i2, n2;
    return i2 = e2, (n2 = [{ key: "addClass", value: function(o2, i3) {
      o2 && (i3 = i3.split(" "), e2.getElements(o2).forEach(function(e3) {
        var o3;
        (o3 = e3.classList).add.apply(o3, t(i3));
      }));
    } }, { key: "removeClass", value: function(o2, i3) {
      o2 && (i3 = i3.split(" "), e2.getElements(o2).forEach(function(e3) {
        var o3;
        (o3 = e3.classList).remove.apply(o3, t(i3));
      }));
    } }, { key: "getElements", value: function(t2) {
      if (t2)
        return void 0 === t2.forEach && (t2 = [t2]), t2;
    } }, { key: "getMoreVisibleSides", value: function(t2) {
      if (!t2)
        return {};
      var e3 = t2.getBoundingClientRect(), o2 = window.innerWidth, i3 = window.innerHeight, n3 = e3.left, r2 = e3.top;
      return { horizontal: n3 > o2 - n3 - e3.width ? "left" : "right", vertical: r2 > i3 - r2 - e3.height ? "top" : "bottom" };
    } }, { key: "getAbsoluteCoords", value: function(t2) {
      if (t2) {
        var e3 = t2.getBoundingClientRect(), o2 = window.pageXOffset, i3 = window.pageYOffset;
        return { width: e3.width, height: e3.height, top: e3.top + i3, right: e3.right + o2, bottom: e3.bottom + i3, left: e3.left + o2 };
      }
    } }, { key: "getCoords", value: function(t2) {
      return t2 ? t2.getBoundingClientRect() : {};
    } }, { key: "getData", value: function(t2, e3, o2) {
      if (t2) {
        var i3 = t2 ? t2.dataset[e3] : "";
        return "number" === o2 ? i3 = parseFloat(i3) || 0 : "true" === i3 ? i3 = true : "false" === i3 && (i3 = false), i3;
      }
    } }, { key: "setData", value: function(t2, e3, o2) {
      t2 && (t2.dataset[e3] = o2);
    } }, { key: "setStyle", value: function(t2, e3, o2) {
      t2 && (t2.style[e3] = o2);
    } }, { key: "show", value: function(t2) {
      var o2 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "block";
      e2.setStyle(t2, "display", o2);
    } }, { key: "hide", value: function(t2) {
      e2.setStyle(t2, "display", "none");
    } }, { key: "getHideableParent", value: function(t2) {
      for (var e3, o2 = t2.parentElement; o2; ) {
        var i3 = getComputedStyle(o2).overflow;
        if (-1 !== i3.indexOf("scroll") || -1 !== i3.indexOf("auto")) {
          e3 = o2;
          break;
        }
        o2 = o2.parentElement;
      }
      return e3;
    } }]) && o(i2, n2), e2;
  }();
  function n(t2, e2) {
    for (var o2 = 0; o2 < e2.length; o2++) {
      var i2 = e2[o2];
      i2.enumerable = i2.enumerable || false, i2.configurable = true, "value" in i2 && (i2.writable = true), Object.defineProperty(t2, i2.key, i2);
    }
  }
  var r = ["top", "bottom", "left", "right"].map(function(t2) {
    return "position-".concat(t2);
  }), a = { top: "rotate(180deg)", left: "rotate(90deg)", right: "rotate(-90deg)" }, l = function() {
    function t2(e3) {
      !function(t3, e4) {
        if (!(t3 instanceof e4))
          throw new TypeError("Cannot call a class as a function");
      }(this, t2);
      try {
        this.setProps(e3), this.init();
      } catch (t3) {
        console.warn("Couldn't initiate popper"), console.error(t3);
      }
    }
    var e2, o2;
    return e2 = t2, (o2 = [{ key: "init", value: function() {
      var t3 = this.$popperEle;
      t3 && this.$triggerEle && (i.setStyle(t3, "zIndex", this.zIndex), this.setPosition());
    } }, { key: "setProps", value: function(t3) {
      var e3 = (t3 = this.setDefaultProps(t3)).position ? t3.position.toLowerCase() : "auto";
      if (this.$popperEle = t3.$popperEle, this.$triggerEle = t3.$triggerEle, this.$arrowEle = t3.$arrowEle, this.margin = parseFloat(t3.margin), this.offset = parseFloat(t3.offset), this.enterDelay = parseFloat(t3.enterDelay), this.exitDelay = parseFloat(t3.exitDelay), this.showDuration = parseFloat(t3.showDuration), this.hideDuration = parseFloat(t3.hideDuration), this.transitionDistance = parseFloat(t3.transitionDistance), this.zIndex = parseFloat(t3.zIndex), this.afterShowCallback = t3.afterShow, this.afterHideCallback = t3.afterHide, this.hasArrow = !!this.$arrowEle, -1 !== e3.indexOf(" ")) {
        var o3 = e3.split(" ");
        this.position = o3[0], this.secondaryPosition = o3[1];
      } else
        this.position = e3;
    } }, { key: "setDefaultProps", value: function(t3) {
      return Object.assign({ position: "auto", margin: 8, offset: 5, enterDelay: 0, exitDelay: 0, showDuration: 300, hideDuration: 200, transitionDistance: 10, zIndex: 1 }, t3);
    } }, { key: "setPosition", value: function() {
      i.show(this.$popperEle, "inline-flex");
      var t3, e3, o3, n2 = window.innerWidth, l2 = window.innerHeight, s = i.getAbsoluteCoords(this.$popperEle), p = i.getAbsoluteCoords(this.$triggerEle), u = s.width, c = s.height, f = s.top, h = s.right, d = s.bottom, v = s.left, y = p.width, m = p.height, g = p.top, w = p.right, E = p.bottom, D = p.left, b = g - f, x = D - v, $ = x, k = b, S = this.position, C = this.secondaryPosition, T = y / 2 - u / 2, P = m / 2 - c / 2, O = this.margin, A = this.transitionDistance, I = window.scrollY - f, z = l2 + I, H = window.scrollX - v, L = n2 + H, F = this.offset;
      F && (I += F, z -= F, H += F, L -= F), "auto" === S && (S = i.getMoreVisibleSides(this.$triggerEle).vertical);
      var j = { top: { top: k - c - O, left: $ + T }, bottom: { top: k + m + O, left: $ + T }, right: { top: k + P, left: $ + y + O }, left: { top: k + P, left: $ - u - O } }, W = j[S];
      if (k = W.top, $ = W.left, C && ("top" === C ? k = b : "bottom" === C ? k = b + m - c : "left" === C ? $ = x : "right" === C && ($ = x + y - u)), $ < H ? "left" === S ? o3 = "right" : $ = H + v > w ? w - v : H : $ + u > L && ("right" === S ? o3 = "left" : $ = L + v < D ? D - h : L - u), k < I ? "top" === S ? o3 = "bottom" : k = I + f > E ? E - f : I : k + c > z && ("bottom" === S ? o3 = "top" : k = z + f < g ? g - d : z - c), o3) {
        var M = j[o3];
        "top" === (S = o3) || "bottom" === S ? k = M.top : "left" !== S && "right" !== S || ($ = M.left);
      }
      "top" === S ? (t3 = k + A, e3 = $) : "right" === S ? (t3 = k, e3 = $ - A) : "left" === S ? (t3 = k, e3 = $ + A) : (t3 = k - A, e3 = $);
      var B = "translate3d(".concat(e3, "px, ").concat(t3, "px, 0)");
      if (i.setStyle(this.$popperEle, "transform", B), i.setData(this.$popperEle, "fromLeft", e3), i.setData(this.$popperEle, "fromTop", t3), i.setData(this.$popperEle, "top", k), i.setData(this.$popperEle, "left", $), i.removeClass(this.$popperEle, r.join(" ")), i.addClass(this.$popperEle, "position-".concat(S)), this.hasArrow) {
        var q = 0, R = 0, V = $ + v, X = k + f, Y = this.$arrowEle.offsetWidth / 2, N = a[S] || "";
        "top" === S || "bottom" === S ? (q = y / 2 + D - V) < Y ? q = Y : q > u - Y && (q = u - Y) : "left" !== S && "right" !== S || ((R = m / 2 + g - X) < Y ? R = Y : R > c - Y && (R = c - Y)), i.setStyle(this.$arrowEle, "transform", "translate3d(".concat(q, "px, ").concat(R, "px, 0) ").concat(N));
      }
      i.hide(this.$popperEle);
    } }, { key: "resetPosition", value: function() {
      i.setStyle(this.$popperEle, "transform", "none"), this.setPosition();
    } }, { key: "show", value: function() {
      var t3 = this, e3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, o3 = e3.resetPosition, n2 = e3.data;
      clearTimeout(this.exitDelayTimeout), clearTimeout(this.hideDurationTimeout), o3 && this.resetPosition(), this.enterDelayTimeout = setTimeout(function() {
        var e4 = i.getData(t3.$popperEle, "left"), o4 = i.getData(t3.$popperEle, "top"), r2 = "translate3d(".concat(e4, "px, ").concat(o4, "px, 0)"), a2 = t3.showDuration;
        i.show(t3.$popperEle, "inline-flex"), i.getCoords(t3.$popperEle), i.setStyle(t3.$popperEle, "transitionDuration", a2 + "ms"), i.setStyle(t3.$popperEle, "transform", r2), i.setStyle(t3.$popperEle, "opacity", 1), t3.showDurationTimeout = setTimeout(function() {
          "function" == typeof t3.afterShowCallback && t3.afterShowCallback(n2);
        }, a2);
      }, this.enterDelay);
    } }, { key: "hide", value: function() {
      var t3 = this, e3 = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, o3 = e3.data;
      clearTimeout(this.enterDelayTimeout), clearTimeout(this.showDurationTimeout), this.exitDelayTimeout = setTimeout(function() {
        if (t3.$popperEle) {
          var e4 = i.getData(t3.$popperEle, "fromLeft"), n2 = i.getData(t3.$popperEle, "fromTop"), r2 = "translate3d(".concat(e4, "px, ").concat(n2, "px, 0)"), a2 = t3.hideDuration;
          i.setStyle(t3.$popperEle, "transitionDuration", a2 + "ms"), i.setStyle(t3.$popperEle, "transform", r2), i.setStyle(t3.$popperEle, "opacity", 0), t3.hideDurationTimeout = setTimeout(function() {
            i.hide(t3.$popperEle), "function" == typeof t3.afterHideCallback && t3.afterHideCallback(o3);
          }, a2);
        }
      }, this.exitDelay);
    } }, { key: "updatePosition", value: function() {
      i.setStyle(this.$popperEle, "transitionDuration", "0ms"), this.resetPosition();
      var t3 = i.getData(this.$popperEle, "left"), e3 = i.getData(this.$popperEle, "top");
      i.show(this.$popperEle, "inline-flex"), i.setStyle(this.$popperEle, "transform", "translate3d(".concat(t3, "px, ").concat(e3, "px, 0)"));
    } }]) && n(e2.prototype, o2), t2;
  }();
  window.PopperComponent = l;
}(), function() {
  function t(t2, e2) {
    for (var o2 = 0; o2 < e2.length; o2++) {
      var i2 = e2[o2];
      i2.enumerable = i2.enumerable || false, i2.configurable = true, "value" in i2 && (i2.writable = true), Object.defineProperty(t2, i2.key, i2);
    }
  }
  var e = function() {
    function e2() {
      !function(t2, e3) {
        if (!(t2 instanceof e3))
          throw new TypeError("Cannot call a class as a function");
      }(this, e2);
    }
    var o2, i2, n;
    return o2 = e2, n = [{ key: "convertToBoolean", value: function(t2) {
      var e3 = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      return t2 = true === t2 || "true" === t2 || false !== t2 && "false" !== t2 && e3;
    } }, { key: "convertToFloat", value: function(t2) {
      var e3 = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
      return void 0 !== t2 ? parseFloat(t2) : e3;
    } }], (i2 = null) && t(o2.prototype, i2), n && t(o2, n), e2;
  }();
  function o(t2, e2) {
    for (var o2 = 0; o2 < e2.length; o2++) {
      var i2 = e2[o2];
      i2.enumerable = i2.enumerable || false, i2.configurable = true, "value" in i2 && (i2.writable = true), Object.defineProperty(t2, i2.key, i2);
    }
  }
  var i = function() {
    function t2() {
      !function(t3, e3) {
        if (!(t3 instanceof e3))
          throw new TypeError("Cannot call a class as a function");
      }(this, t2);
    }
    var e2, i2, n;
    return e2 = t2, n = [{ key: "hasEllipsis", value: function(t3) {
      return !!t3 && t3.scrollWidth > t3.offsetWidth;
    } }, { key: "setStyle", value: function(t3, e3, o2) {
      t3 && (t3.style[e3] = o2);
    } }, { key: "getScrollableParents", value: function(t3) {
      if (!t3)
        return [];
      for (var e3 = [window], o2 = t3.parentElement; o2; ) {
        var i3 = getComputedStyle(o2).overflow;
        -1 === i3.indexOf("scroll") && -1 === i3.indexOf("auto") || e3.push(o2), o2 = o2.parentElement;
      }
      return e3;
    } }], (i2 = null) && o(e2.prototype, i2), n && o(e2, n), t2;
  }();
  !function() {
    if (!window.tooltipComponentInitiated) {
      var t2, o2, n, r, a;
      window.tooltipComponentInitiated = true;
      var l, s = {}, p = false;
      u(), window.addEventListener("load", u);
    }
    function u() {
      p || (t2 = document.querySelector("body")) && (document.addEventListener("mouseover", c), document.addEventListener("mouseout", f), document.addEventListener("touchmove", h), document.addEventListener("click", d), p = true);
    }
    function c(p2) {
      if (!n) {
        var u2 = p2.target.closest("[data-tooltip]");
        u2 && (n = u2, function() {
          if (n) {
            var p3, u3 = e.convertToBoolean, c2 = e.convertToFloat, f2 = n.dataset;
            if (!(s = { tooltip: f2.tooltip, position: f2.tooltipPosition || "auto", zIndex: c2(f2.tooltipZIndex, 1), enterDelay: c2(f2.tooltipEnterDelay, 0), exitDelay: c2(f2.tooltipExitDelay, 0), fontSize: f2.tooltipFontSize || "14px", margin: c2(f2.tooltipMargin, 8), offset: c2(f2.tooltipOffset, 5), showDuration: c2(f2.tooltipShowDuration, 300), hideDuration: c2(f2.tooltipHideDuration, 200), transitionDistance: c2(f2.tooltipTransitionDistance, 10), ellipsisOnly: u3(f2.tooltipEllipsisOnly), allowHtml: u3(f2.tooltipAllowHtml), hideOnClick: u3(f2.tooltipHideOnClick, true), hideArrowIcon: u3(f2.tooltipHideArrowIcon), alignment: f2.tooltipAlignment || "left", maxWidth: f2.tooltipMaxWidth || "300px", additionalClasses: f2.tooltipAdditionalClasses }).tooltip || s.ellipsisOnly && !i.hasEllipsis(n))
              v();
            else
              o2 && o2.remove(), function() {
                var e2 = "tooltip-comp";
                s.hideArrowIcon && (e2 += " hide-arrow-icon"), s.additionalClasses && (e2 += " " + s.additionalClasses);
                var n2 = '<div class="'.concat(e2, '">\n        <i class="tooltip-comp-arrow"></i>\n        <div class="tooltip-comp-content"></div>\n      </div>');
                t2.insertAdjacentHTML("beforeend", n2);
                var a2 = i.setStyle;
                o2 = document.querySelector(".tooltip-comp"), r = o2.querySelector(".tooltip-comp-arrow");
                var l2 = o2.querySelector(".tooltip-comp-content");
                s.allowHtml ? l2.innerHTML = s.tooltip : l2.innerText = s.tooltip, a2(o2, "zIndex", s.zIndex), a2(o2, "fontSize", s.fontSize), a2(o2, "textAlign", s.alignment), a2(o2, "maxWidth", s.maxWidth);
              }(), p3 = { $popperEle: o2, $triggerEle: n, $arrowEle: r, position: s.position, margin: s.margin, offset: s.offset, enterDelay: s.enterDelay, exitDelay: s.exitDelay, showDuration: s.showDuration, hideDuration: s.hideDuration, transitionDistance: s.transitionDistance, zIndex: s.zIndex }, (l = new PopperComponent(p3)).show(), (a = i.getScrollableParents(n)).forEach(function(t3) {
                t3.addEventListener("scroll", y);
              });
          }
        }());
      }
    }
    function f(t3) {
      if (n) {
        for (var e2 = t3.relatedTarget; e2; ) {
          if (e2 === n)
            return;
          e2 = e2.parentNode;
        }
        v();
      }
    }
    function h() {
      v();
    }
    function d() {
      s.hideOnClick && v();
    }
    function v() {
      (o2 || n) && (l && l.hide(), a && (a.forEach(function(t3) {
        t3.removeEventListener("scroll", y);
      }), a = null), n = null);
    }
    function y() {
      v();
    }
  }();
}();
window.echarts = echarts;
window.html2canvas = html2canvas;
window.ApexCharts = ApexCharts;
window.Chart = Chart;
window.ChartDataLabels = ChartDataLabels;
