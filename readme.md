# cms1

Stealing a page from the front-end atomic design pattern, entries are your "organisms." Entries live in the ether and are accessible from their `entryId` natively. However, they can also be mapped to a URL via a menu.

Entries are tied to a "template." Templates are responsible for defining how a page looks, but also how a page interacts with it's sibling pages within a menu.

Templates are composed of "regions." Each region can hold one or more field instances, defined by the developer and implemented by a content editor within an entry.

- A field instance can be tagged as "reusable" which causes it to be searched and placed on multiple pages.
- Field instances can be tied to a region at the entry level (most common) or at the template level (by a developer). This allows a developer to pre-fill a template with suggested content.
- Field instances can be reordered and removed, unless specifically disabled by a developer at the template level.

It is up to the content author to fill the region with the appropriate fields, within an Entry.

One field type is "views" which returns a listing of other collected entries.