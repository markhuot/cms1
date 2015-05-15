# cms1

Templates define structure, they contain regions.

Regions define a place to put content, they are applied to templates and
contain a list of allowable fields.

Entries implement templates, and add field instances to a region.

Templates can also add field instances to a region, acting as default content
for any entries that use that template.

Entries can add, remove, and reorder field instances in a region. Unless, they
are defined in the template, and the developer has "locked" them.

Fields can be "grouped" to create more powerful fields. Anywhere you can use a
field you can use a field group.