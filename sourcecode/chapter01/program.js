// document.writeln('hello, dalong');

// 阻断子对象触达父对象的原型链，ES6 已经默认加了高级版的该方法
// if (typeof Object.create !== 'function') {
//     Object.create = function (o) {
//         var F = function () {};
//         F.prototype = o;
//         return new F(); 
//     };
// }

// add a method conditionally
Function.prototype.method = function (name, fuc) {
    if (!this.prototype[name]) {
        this.prototype[name] = func;
    }
};

// a function that visits every node of the tree in html source order
var walk_the_DOM = function walk(node, func) {
    func(node);
    node = node.fristChild;
    while (node) {
        walk(node, func);
        node = node.nextSibling;
    }
};

var getElementsByAttribute = function (att, value) {
    let results = [];
    walk_the_DOM(document.body, function (node) {
        let actual = node.nodeType === 1 && node.getAttribute(att);
        if (typeof actual === 'string' && (actual === value || typeof value !== 'string')) {
            results.push(node);
        }
    });
    return results;
};

var stooge = {
    "firstname": "Feng",
    "lastname": "Dalong",
};

// console.log(stooge);

stooge['middlename'] = 'hahei';
stooge.nickname = 'dalong';
console.log(stooge);

var x = stooge;
x.height = '168cm';
console.log(stooge);

var y = Object.create(stooge);
y.food = 'apple';
console.log(stooge);
console.log(y);
console.log(y.__proto__);

stooge.programming = 'JS';
console.log('x: ' + x.programming);
console.log('y: ' + y.programming);

console.log(typeof stooge.programming);
console.log(typeof stooge.constructor);

console.log(Object.create);