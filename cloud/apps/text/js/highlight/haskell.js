(window.textWebpackJsonp=window.textWebpackJsonp||[]).push([[75],{514:function(e,n,i){"use strict";e.exports=function(e){const n={variants:[e.COMMENT("--","$"),e.COMMENT(/\{-/,/-\}/,{contains:["self"]})]},i={className:"meta",begin:/\{-#/,end:/#-\}/},s={className:"meta",begin:"^#",end:"$"},a={className:"type",begin:"\\b[A-Z][\\w']*",relevance:0},t={begin:"\\(",end:"\\)",illegal:'"',contains:[i,s,{className:"type",begin:"\\b[A-Z][\\w]*(\\((\\.\\.|,|\\w+)\\))?"},e.inherit(e.TITLE_MODE,{begin:"[_a-z][\\w']*"}),n]};return{name:"Haskell",aliases:["hs"],keywords:"let in if then else case of where do module import hiding qualified type data newtype deriving class instance as default infix infixl infixr foreign export ccall stdcall cplusplus jvm dotnet safe unsafe family forall mdo proc rec",contains:[{beginKeywords:"module",end:"where",keywords:"module where",contains:[t,n],illegal:"\\W\\.|;"},{begin:"\\bimport\\b",end:"$",keywords:"import qualified as hiding",contains:[t,n],illegal:"\\W\\.|;"},{className:"class",begin:"^(\\s*)?(class|instance)\\b",end:"where",keywords:"class family instance where",contains:[a,t,n]},{className:"class",begin:"\\b(data|(new)?type)\\b",end:"$",keywords:"data family type newtype deriving",contains:[i,a,t,{begin:/\{/,end:/\}/,contains:t.contains},n]},{beginKeywords:"default",end:"$",contains:[a,t,n]},{beginKeywords:"infix infixl infixr",end:"$",contains:[e.C_NUMBER_MODE,n]},{begin:"\\bforeign\\b",end:"$",keywords:"foreign import export ccall stdcall cplusplus jvm dotnet safe unsafe",contains:[a,e.QUOTE_STRING_MODE,n]},{className:"meta",begin:"#!\\/usr\\/bin\\/env runhaskell",end:"$"},i,s,e.QUOTE_STRING_MODE,e.C_NUMBER_MODE,a,e.inherit(e.TITLE_MODE,{begin:"^[_a-z][\\w']*"}),n,{begin:"->|<-"}]}}}}]);
//# sourceMappingURL=haskell.js.map?v=c4c833fbbbe0d5f264ac