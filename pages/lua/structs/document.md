<title>Document</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.RegisterDocument</page>.
	</description>
	<fields>
		<item name="Name" type="string">The name of the document.</item>
		<item name="Type" type="string" default="Slasher">
			The document's type. Can be any value, but `"Slasher"` is the convention used for every document related to a Slasher, and is required for the document to be picked up automatically by <page>SlashCo.EndRound</page>'s hand-out logic.
		</item>
		<item name="Slasher" type="string" optional>
			The ID of the Slasher this document belongs to. Defaults to `Name` if not set.<br>
			Only relevant when `Type` is `"Slasher"`.
		</item>
		<item name="Class" type="number" optional>
			The Slasher's <page>SlashCo.SlasherClass</page>.<br>
			Only required if <page>Document#Slasher</page> isn't set and no registered Slasher matches `Name` (e.g. for a document like Hat Man, who isn't a playable Slasher).
		</item>
		<item name="DangerLevel" type="number" optional>
			The Slasher's <page>DangerLevel</page>.<br>
			Only required under the same conditions as `Class`.
		</item>
		<item name="ID" type="string" optional>
			Used to look up the document's material icon.<br>
			Only required under the same conditions as `Class`.
		</item>
		<item name="Description" type="string">The description shown as soon as the player receives the document.</item>
		<item name="AdditionalDescription" type="string" optional>An extra description shown once the player has survived the Slasher.</item>
		<item name="Aliases" type="table" optional>
			A list of alternate name strings shown alongside the document, translated through the language key `Alias_<name>`.<br>
			If not set, falls back to the matching <page>SLASHER</page>'s own <page>SLASHER#Aliases</page> field.
		</item>
	</fields>
</structure>