# セクション3: Pythonの基本
# 14.文字の代入

print('My name is {name} {family}. Watashi ha {family} {name}'.format(name='Takeru', family='Kyono'))
x = str(1)
print(type(x))
print(type(str(3.14)))
print(type(str(True)))

# f-strings
a = 'a'
print(f'a is {a}')

x, y, z = 1, 2, 3
print(f'a is {x}, {y}, {z}')
print(f'a is {z}, {y}, {z}')

name = 'Jun'
family = 'Sakai'
print(f'My name is {name} {family}. Watashi ha {family} {name}')