import { liteClient as algoliasearch } from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import { searchBox, hits, configure } from 'instantsearch.js/es/widgets';
import { getPropertyByPath } from 'instantsearch.js/es/lib/utils';

const searchClient = algoliasearch('K1EQ25KEEX', '11723a8edc8a58f57013722211d3dfd2');

const search = instantsearch({
    indexName: 'fonts',
    searchClient,
});

search.addWidgets([
    searchBox({
        container: "#searchbox"
    }),
    configure({
        hitsPerPage: 5
    }),
    hits({
        container: "#hits",
        templates: {
            item: (hit, { html, components }) => html`
                <a class="flex w-full" href="/fonts/${hit.slug}">
                    <img src="https://cdn-icons-png.flaticon.com/512/9210/9210865.png" class="w-5 h-5"  alt="icon"/>
                    <div class="hit-name ms-3">
                        ${components.Highlight({ hit, attribute: "name" })}
                    </div>
                </a>
            `,
        },
    }),
]);

export default search;
