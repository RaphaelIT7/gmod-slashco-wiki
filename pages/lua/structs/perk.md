<title>Perk</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.RegisterPerk</page>.<br>
		Besides the fields below, a perk may define any number of additional numeric fields (e.g. <page>Item#FuelSpeed</page>) that are read through <page>Player:PerkValue</page> by whatever system the perk is meant to affect.
	</description>
	<fields>
		<item name="ID" type="string">The perk's unique ID, also passed as the second argument to <page>SlashCo.RegisterPerk</page>.</item>
		<item name="Name" type="string">Language key used as the perk's display name.</item>
		<item name="Description" type="string">Language key used as the perk's description.</item>
		<item name="Icon" type="string">Path to the perk's icon material, relative to `materials/`.</item>
		<item name="Team" type="number">The team this perk is for - <page>TEAM_SURVIVOR</page> or <page>TEAM_SLASHER</page>.</item>
		<item name="Level" type="number" default="0">The player level required before the perk can be bought.</item>
		<item name="Price" type="number" default="50">How many points the perk costs to buy.</item>
		<item name="Conflicts" type="table" optional>
			A list of other perk IDs that cannot be active at the same time as this perk.<br>
			<note>
				After registration this list is converted in-place into a lookup set (`Conflicts[otherPerkID] = true`).
			</note>
		</item>
	</fields>
</structure>