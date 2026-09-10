<function name="GetVisible" parent="Player" type="classfunc">
	<description>
		Returns the player's base visibility state.<br>
		This does not account for item or slasher effects - use <page>Player:CanBeSeen</page> for that.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.<br>
		<note>
			Aliased as <page>Player:IsVisible</page>.
		</note>
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="visible" type="boolean" default="true">Whether the player is marked as visible.</ret>
	</rets>
</function>