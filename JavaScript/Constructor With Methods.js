function Rectangle(height, width) {
    this.height = height;
    this.width = width;
    this.calcArea = function () {
        return this.height * this.width;
    };
    this.calcPerimeter = function () {
        return 2 * (this.height + this.width);
    };
}
var rect = new Rectangle(7, 3);
var area = rect.calcArea();
var perimeter = rect.calcPerimeter();
console.log('Area:', area, 'Perimeter:', perimeter); //Area: 21 Perimeter: 20