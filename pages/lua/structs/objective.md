<title>Objective</title>
<structure>
	<realm>Shared</realm>
	<description>
		A single active round objective entry, stored in `GameData.Objectives` and managed through <page>SlashCo.UpdateObjective</page>.<br>
		Which objective names exist and whether they track a count is defined by the fixed registry `SlashCo.Objectives` (`generator`, `helicopter`, `heliwait`, `trash`, `mop`, `trap`, `page`).
	</description>
	<fields>
		<item name="name" type="string">The objective's name, matching a key in `SlashCo.Objectives`.</item>
		<item name="status" type="number">The objective's current <page>SlashCo.ObjStatus</page>.</item>
		<item name="totalCount" type="number" optional>How many steps are needed to complete the objective. Only present if `SlashCo.Objectives[name].hasCount` is `true`.</item>
		<item name="doneCount" type="number" optional>How many steps have been completed so far. Only present if `SlashCo.Objectives[name].hasCount` is `true`.</item>
	</fields>
</structure>