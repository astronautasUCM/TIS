import re

class HTMLlexer:

    def __init__(self):
        self.r = False
        self.out = ''

    include = r'(\{% include [\w\.\\]+ %\})'

    def t_include(self, string):
        edit = string
        split = re.finditer(self.include, string)
        for word in split:
            link = word.group(0).split()[2]
            file = ''
            if (self.r):
                file = self.parse(link)
            else:
                file = open(link).read()
            edit = re.sub(word.group(0), file, edit)
        return edit

    def parse(self, file):
        s = ''
        with open(file, 'r') as f:
            string = f.read()
            s = self.t_include(string)
            f.close()
        return s

    def compile(self, file, output=None, r=True):
        '''
            arguments
                @output = string with the name of the output file
                @r = boolean to set recursiveness
        '''
        self.out = output
        self.r = r
        s = self.parse(file)
        if self.out is None:
            self.out = file + '.out'
        with open(self.out, 'w') as f:
            f.write(s)
            f.close()
        
    


string = '{% include hello %} asdfadf adj;f adfj;adskjfa;osinfdas faisodjfa;sdf {% include bye %}'
lex = HTMLlexer()
lex.parse("index.html")