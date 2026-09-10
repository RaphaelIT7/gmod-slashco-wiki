<function name="GetOwnedPerks" parent="Player" type="classfunc">
	<description>
		Returns the player's raw owned-perks string.<br>
		This is a comma-separated list of perk IDs; an active perk's ID is additionally prefixed with `!`. Prefer <page>SlashCo.GetOwnedPerks</page>/<page>SlashCo.GetActivePerks</page> over parsing this yourself.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="ownedPerks" type="string">The current value, or an empty string if none have been set yet.</ret>
	</rets>
</function>